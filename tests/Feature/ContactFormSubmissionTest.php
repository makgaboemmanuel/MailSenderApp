<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact;
use App\Mail\ContactFormSubmission;


class ContactFormSubmissionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testMailableContent(){
        $contact = Contact::factory()->create();

        $mailable = new ContactFormSubmission( $contact );
        $classProps = ['firstname','lastname', 'email', 'company', 'phone_number', 'message'] ;

        foreach ($classProps as $value) {
            # code...
        }

        $mailable->assertSeeInHtml( $contact->firstname);
        $mailable->assertSeeInHtml( $contact->lastname);
        $mailable->assertSeeInHtml( $contact->email);
        $mailable->assertSeeInHtml( $contact->company);
        $mailable->assertSeeInHtml( $contact->phone_number);
        $mailable->assertSeeInHtml( $contact->message);


    }
}
