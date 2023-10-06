<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationApprovalMail extends Mailable
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
        //$attachmentLocation = storage_path("app/mails/sample.pdf");
        $attachmentLocation = storage_path("app/".$this->mailDetails['cert_path']);
        $mailSignatureAssetUrl = env('APP_URL')."/public/images";
        
        return $this->subject($this->mailDetails['subject'])
                    ->view('emails.registration.approval_to_partner', [
                        'subject' => $this->mailDetails['subject'], 
                        'partner_name' => $this->mailDetails['partner_name'],
                        'partner_admin_name' => $this->mailDetails['partner_admin_name'],
                        'partner_email' => $this->mailDetails['partner_email'],
                        'partner_pass' => $this->mailDetails['partner_pass'],
                        ])
                    ->attach($attachmentLocation);
    }
}
