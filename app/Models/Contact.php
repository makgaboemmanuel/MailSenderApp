<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;


class Contact extends Model
{
    use HasFactory;

    protected $fillable = [ 'firstname','lastname', 'email', 'company', 'phone_number', 'message'];

    public function sendNotificationEmail(){
        Mail::to( config( 'mail.notification_recipient') )->queue(new ContactFormSubmission( $this ));
    }

}
