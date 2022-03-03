<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\NotifyMail;
use App\Notifications\welcome;
use App\Mail\CompanyAcountCreated;
use App\Models\Contacts;
use App\Models\User;
use App\Models\Campaigns;
use Auth;
use Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
     protected $send_mail;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($send_mail)
    {
        $this->send_mail = $send_mail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       $name = $this->send_mail['name'];
       $email = $this->send_mail['email'];
        $template = new CompanyAcountCreated();             
        Mail::to($email,$name)->send($template);
        $this->send_mail->update(['is_email_sent'=>'Sent']);
                
    }
   
}
