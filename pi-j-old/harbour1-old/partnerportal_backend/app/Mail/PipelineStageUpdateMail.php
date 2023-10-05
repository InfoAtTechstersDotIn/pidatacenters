<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PipelineStageUpdateMail extends Mailable
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
                    ->view('emails.pipeline.pipeline_stage_update_to_admin')->with('data', $this->mailDetails);
    }
}
