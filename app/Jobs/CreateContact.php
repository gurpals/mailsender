<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Contacts;

class CreateContact implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $importData;
    protected $campaign_id;
   
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($importData,$campaign_id)
    {
        $this->importData   = $importData;
        $this->campaign_id  = $campaign_id;
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emal  = ( strpos($this->importData[0], ";") !== false )?substr($this->importData[0], strpos($this->importData[0], ";")+1):$this->importData[1];
                           
                Contacts::firstOrCreate(
                    ['email' => $emal],
                    [
                    'campaign_id'                 => $this->campaign_id,
                    'domain'                      => ( strpos($this->importData[0], ";") !== false )?substr  ($this->importData[0], 0, strpos($this->importData[0], ";")):$this->importData[0], 
                    'email'                       => ( strpos($this->importData[0], ";") !== false )?substr($this->importData[0], strpos($this->importData[0], ";")+1):$this->importData[1],
                    'name'                        => empty($this->importData[2]) ? 'Sir/Madam' : $this->importData[2],
                    'organization'                => $this->importData[3],
                    'street'                      => $this->importData[4],
                    'city'                        => $this->importData[5],
                    'state'                       => $this->importData[6],
                    'postal_code'                 => $this->importData[7],
                    'country'                     => $this->importData[8],
                    'telephone'                   => $this->importData[9],
                   
                ]);
    }
}
