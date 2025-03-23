<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Simpan atau kirim email (Opsional)
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('admin@example.com')
                    ->subject('New Contact Message from ' . $request->name)
                    ->replyTo($request->email);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
