<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use Exception;
use Carbon\Carbon;

class ContactController extends Controller
{

    public function ContactIndex()
    {
        return view('contact');
    }


    public function ContactPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        try {
            ContactModel::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'addon' => now(),
            ]);

            return redirect()->back()->with('success', 'Thank you! Your enquiry has been submitted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

}
