<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationRejectionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->mailDetails = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->mailDetails['subject'])
                    ->view('emails.registration.rejection_to_partner', [
                        'subject' => $this->mailDetails['subject'], 
                        'partner_ref_no' => $this->mailDetails['partner_ref_no'],
                        'partner_admin_name' => $this->mailDetails['partner_admin_name'],
			'rejection_comment' => $this->mailDetails['rejection_comment'],
                    ]);
    }
}
