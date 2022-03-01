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
     protected $name;
     protected $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($send_mail,$name,$id)
    {
        $this->send_mail = $send_mail;
        $this->name      = $name;
        $this->$id      = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       
        $email = new CompanyAcountCreated();             
        
        Mail::to($this->send_mail,$this->name)->send($email);
                
    }
   
}
