<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationInitiationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailDetails;
    private $mailToRole;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $role)
    {
        $this->mailDetails = $details;
        $this->mailToRole = $role;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ( $this->mailToRole == 'admin' ) {

            return $this->subject($this->mailDetails['subject'])
                    ->view(
                        'emails.registration.initiation_to_admin', 
                        [
                            'subject' => $this->mailDetails['subject'],
			    'partner_title' => $this->mailDetails['partner_title'], 
                            'partner_name' => $this->mailDetails['partner_name'], 
                            'comp_name' => $this->mailDetails['comp_name'],
                            'partner_ref_id' => $this->mailDetails['partner_ref_id'],
                        ]
                    );

        } else if ( $this->mailToRole == 'partner' ) {

            return $this->subject($this->mailDetails['subject'])
                    ->view(
                        'emails.registration.initiation_to_partner', 
                        [
                            'subject' => $this->mailDetails['subject'], 
			    'partner_title' => $this->mailDetails['partner_title'],
                            'partner_name' => $this->mailDetails['partner_name'], 
                            'comp_name' => $this->mailDetails['comp_name'],
                            'partner_ref_id' => $this->mailDetails['partner_ref_id'],
                        ]
                    );

        } else if ( $this->mailToRole == 'regionhead' ) {
            return $this->subject($this->mailDetails['subject'])
                    ->view(
                        'emails.registration.initiation_to_rh', 
                        [
                            'subject' => $this->mailDetails['subject'], 
			    'partner_title' => $this->mailDetails['partner_title'],
                            'partner_name' => $this->mailDetails['partner_name'], 
                            'comp_name' => $this->mailDetails['comp_name'],
                            'partner_ref_id' => $this->mailDetails['partner_ref_id'],
                            'rh_name' => $this->mailDetails['rh_name'],
                        ]
                    );
        } if ( $this->mailToRole == 'relationshipowner' ) {
            return $this->subject($this->mailDetails['subject'])
                    ->view(
                        'emails.registration.initiation_to_ro', 
                        [
                            'subject' => $this->mailDetails['subject'], 
			    'partner_title' => $this->mailDetails['partner_title'],
                            'partner_name' => $this->mailDetails['partner_name'], 
                            'comp_name' => $this->mailDetails['comp_name'],
                            'partner_ref_id' => $this->mailDetails['partner_ref_id'],
                            'ro_name' => $this->mailDetails['ro_name'],
                        ]
                    );
        } else {
            ;
        }

        
        
    }
}
