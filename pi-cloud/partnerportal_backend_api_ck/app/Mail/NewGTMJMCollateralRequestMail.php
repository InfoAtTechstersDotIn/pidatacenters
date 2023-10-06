<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewGTMJMCollateralRequestMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $mailDetails;

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
                    ->view('emails.gtm.jm_collateral.new_jm_collateral_to_admin')->with('data', $this->mailDetails);
    }
}
