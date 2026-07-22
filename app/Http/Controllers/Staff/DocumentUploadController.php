<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DocumentUploadController extends Controller
{
    public function index(): View
    {
        $documents = Document::where('uploaded_by', auth()->id())
            ->latest()
            ->paginate(10);

        return view('staff.documents.index', compact('documents'));
    }

    public function create(): View
    {
        return view('staff.documents.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'holder_name' => ['required', 'string', 'max:255'],
            'file' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:5120'],
        ], [
            'title.required' => 'कागजातको शीर्षक आवश्यक छ।',
            'holder_name.required' => 'धारकको नाम आवश्यक छ।',
            'file.required' => 'कागजात फाइल अपलोड गर्नुहोस्।',
            'file.mimes' => 'फाइल PDF, JPG, वा PNG हुनुपर्छ।',
            'file.max' => 'फाइल साइज ५MB भन्दा कम हुनुपर्छ।',
        ]);

        $path = $request->file('file')->store('documents', 'public');

        Document::create([
            'document_number' => Document::generateDocumentNumber(),
            'title' => $validated['title'],
            'holder_name' => $validated['holder_name'],
            'file_path' => $path,
            'status' => 'pending',
            'uploaded_by' => auth()->id(),
        ]);

        return redirect()
            ->route('staff.documents.index')
            ->with('status', 'कागजात सफलतापूर्वक अपलोड भयो। स्वीकृतिको लागि Admin लाई पठाइयो।');
    }
}