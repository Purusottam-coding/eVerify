<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocumentVerificationController extends Controller
{
    /**
     * Public page — कुनै पनि visitor ले login नगरी
     * document number ले verify status हेर्न सक्ने।
     */
    public function index(Request $request): View
    {
        $document = null;
        $searched = false;

        if ($request->filled('document_number')) {
            $searched = true;
            $document = Document::where('document_number', trim($request->document_number))->first();
        }

        return view('verify', compact('document', 'searched'));
    }
}