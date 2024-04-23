<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

    class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $to_email = 'kharbouchikhawla603@gmail.com';
        $subject = $request->input('subject');
        $from_name = $request->input('name');  
        $from_email = $request->input('email'); 
        $user_message = $request->input('message'); 
    

        $full_message = "Message from: $from_name\n\n$user_message";
    
        try {

            Mail::raw($full_message, function ($mail) use ($to_email, $subject, $from_email, $from_name) {
                $mail->from($from_email, $from_name);  
                $mail->to($to_email)->subject($subject);
                $mail->replyTo($from_email, $from_name); 
            });

            return response()->json(['message' => 'Email sent successfully'], 200);
        } catch (\Exception $e) {

            return response()->json(['message' => 'Failed to send email. Error: ' . $e->getMessage()], 500);
        }
    }
    
}
