<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email:rfc|max:255',
            'message' => 'required|string|min:10|max:5000',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Pesan berhasil dikirim. Saya akan menghubungi Anda secepatnya.');
    }
}
