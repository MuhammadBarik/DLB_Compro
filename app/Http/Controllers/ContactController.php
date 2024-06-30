<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Proses data kontak, seperti mengirim email atau menyimpannya di database

        // Redirect atau memberikan response setelah data diproses
        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
