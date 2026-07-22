<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocumentReviewController extends Controller
{
    public function index(): View
    {
        $documents = Document::where('status', 'pending')
            ->latest()
            ->paginate(10);

        return view('admin.documents.index', compact('documents'));
    }

    public function show(Document $document): View
    {
        return view('admin.documents.show', compact('document'));
    }

    public function approve(Document $document): RedirectResponse
    {
        $document->update([
            'status' => 'verified',
            'verified_by' => auth()->id(),
            'verified_at' => now(),
        ]);

        return redirect()
            ->route('admin.documents.index')
            ->with('status', 'कागजात स्वीकृत/प्रमाणित गरियो।');
    }

    public function reject(Request $request, Document $document): RedirectResponse
    {
        $validated = $request->validate([
            'remarks' => ['required', 'string', 'max:500'],
        ], [
            'remarks.required' => 'अस्वीकृत गर्नुको कारण लेख्नुहोस्।',
        ]);

        $document->update([
            'status' => 'rejected',
            'remarks' => $validated['remarks'],
            'verified_by' => auth()->id(),
            'verified_at' => now(),
        ]);

        return redirect()
            ->route('admin.documents.index')
            ->with('status', 'कागजात अस्वीकृत गरियो।');
    }
}