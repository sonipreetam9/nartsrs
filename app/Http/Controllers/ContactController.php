<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Mail;
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
            // 1. Data ko Database mein save karna
            ContactModel::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'addon' => now(),
            ]);

            // 2. Email bhejne ke liye data array banana
            $emailData = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'msg' => $request->message,
            ];

            // 3. Admin ko Email Send karna
            Mail::send([], [], function ($mail) use ($emailData) {
                $mail->to('nartsrs@gmail.com')
                    ->subject('New Website Enquiry: ' . $emailData['subject'])
                    ->html("
                    <h2>New Enquiry Received</h2>
                    <p><strong>Name:</strong> {$emailData['name']}</p>
                    <p><strong>Phone:</strong> {$emailData['phone']}</p>
                    <p><strong>Email:</strong> {$emailData['email']}</p>
                    <p><strong>Subject:</strong> {$emailData['subject']}</p>
                    <p><strong>Message:</strong><br/> {$emailData['msg']}</p>
                 ");
            });

            return redirect()->back()->with('success', 'Thank you! Your enquiry has been submitted successfully.');

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

}
