<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contacts;

class CompanyAcountCreated extends Mailable
{
    use Queueable, SerializesModels;
    protected $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contacts $contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Need any development related help for '. $this->contact['domain'])->markdown('emails.sample-mail')->with(['contact' => $this->contact]);
    }
}
