<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_info;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $ContactData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        contact_info::create($ContactData);

        return redirect('/contact-me')->with('success', 'Message sent successfully!');
    }
}

