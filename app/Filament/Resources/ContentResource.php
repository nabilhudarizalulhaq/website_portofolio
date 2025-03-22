<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    // Menampilkan semua konten di admin panel
    public function index()
    {
        $contents = Content::all();
        return view('admin.contents.index', compact('contents'));
    }

    // Menyimpan atau memperbarui konten
    public function update(Request $request)
    {
        foreach ($request->contents as $key => $value) {
            Content::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return redirect()->back()->with('success', 'Content updated successfully');
    }

    // Menghapus konten
    public function destroy($id)
    {
        Content::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Content deleted successfully');
    }
}
