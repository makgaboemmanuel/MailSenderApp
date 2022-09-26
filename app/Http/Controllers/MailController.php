<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Http\Response;
use Exception;
use Illuminate\Support\Facades\Email;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        /* Please create An Object of Contact and Save in The DB */
        try {
                $contact = Contact::create( [
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'company' => $request->company,
                    'phone_number' => $request->phone_number,
                    'message' => $request->message
                ]);

                $contact->SendNotificationEmail();

                // Mail::to( config( 'mail.notification_recipient') )->queue(new ContactFormSubmission( $contact));
            }
            catch( Exception $exception){
                return response([
                    "code"=> 409,
                    "error"=>"error: " . $exception->getMessage()
                ]);
            }

        return response()->json(
            [
                'status' => 200,
                'response' => "Email Send",
                'message' => 'Data Saved',
                'data' => $contact
            ]
        );
    }
}
