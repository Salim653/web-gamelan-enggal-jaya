<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsletter;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletters,email'
        ]);

        Newsletter::create($validated);

        return redirect()->back()->with('success', 'Terima kasih sudah subscribe!');
    }
}