<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    // Menampilkan daftar konten
    public function index()
    {
        $contents = Content::all();
        return view('admin.contents.index', compact('contents'));
    }

    // Menampilkan form tambah konten
    public function create()
    {
        return view('admin.contents.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:contents,key|max:255',
            'value' => 'required'
        ]);

        Content::create([
            'key' => $request->key,
            'value' => $request->value
        ]);

        return redirect()->route('content.index')->with('success', 'Content created successfully.');
    }

    // Menampilkan form edit konten
    public function edit(Content $content)
    {
        return view('admin.contents.edit', compact('content'));
    }

    // Memperbarui data konten
    public function update(Request $request, Content $content)
    {
        $request->validate([
            'value' => 'required'
        ]);

        $content->update([
            'value' => $request->value
        ]);

        return redirect()->route('content.index')->with('success', 'Content updated successfully.');
    }

    // Menghapus konten
    public function destroy(Content $content)
    {
        $content->delete();
        return redirect()->route('content.index')->with('success', 'Content deleted successfully.');
    }
}
