<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DocumentSignatureController extends Controller
{
    public function index(): View
    {
        $documents = Document::where('status', 'verified')
            ->whereNull('signed_at')
            ->latest()
            ->paginate(10);

        return view('superadmin.documents.index', compact('documents'));
    }

    public function sign(Document $document): RedirectResponse
    {
        if (! $document->isVerified()) {
            abort(403, 'केवल प्रमाणित कागजातमा मात्र digital signature गर्न मिल्छ।');
        }

        // Generate QR code pointing to the public verification page.
        $verifyUrl = route('verify.index', ['document_number' => $document->document_number]);

        $qrCode = new QrCode($verifyUrl);
        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        $qrPath = 'qrcodes/'.$document->document_number.'.png';
        Storage::disk('public')->put($qrPath, $result->getString());

        $document->update([
            'signed_by' => auth()->id(),
            'signed_at' => now(),
            'qr_code_path' => $qrPath,
        ]);

        return redirect()
            ->route('superadmin.documents.index')
            ->with('status', 'Digital signature र QR Code सफलतापूर्वक थपियो।');
    }

    public function print(Document $document): View
    {
        if (! $document->isSigned()) {
            abort(403, 'यो कागजातमा अझै digital signature भएको छैन।');
        }

        return view('superadmin.documents.print', compact('document'));
    }
}