<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PipelineRejectionMail extends Mailable
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
            ->view('emails.pipeline.rejection_to_partner')->with('data', $this->mailDetails);

        //return $this->view('view.name');
    }
}
