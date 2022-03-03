<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contacts extends Model
{
    use HasFactory,Notifiable;
    use Notifiable;
    protected $dateFormat = 'Y-m-d';

     protected $fillable = [
        'campaign_id',
        'domain',
        'email',
        'name',
        'organization',
        'street',
        'city',
        'state',
        'postal_code',
        'is_email_sent',
        'country',
        'telephone' 
    ];

    public function getContactsCreatedAt($year,$id){
      return $this->where('campaign_id',$id)->where('created_at',$year)->get();
    }
    public function getContactsUsingID($id){
      return $this->where('campaign_id',$id)->orderByDesc('id')->pluck('created_at')->unique();
    }
    public function getCountOfSentEmailContacts($id,$param){
      if($param == 'campaign'){
        return $this->where('campaign_id',$id)->where('is_email_sent','Sent')->count();
      }
    }
    public function getCountOfPendingEmailContacts($id,$param){
      if($param == 'campaign'){
        return $this->where('campaign_id',$id)->where('is_email_sent','pending')->count();
      }
    }
    public function RelationCampaignContacts(){
      return $this->hasOne(Campaigns::class, 'id', 'campaign_id');
    }
    public function getCampaignName($id,$param = null){   
      $query = $this->where('campaign_id',$id);
      $count = $query->with('RelationCampaignContacts')->count();
      if($count > 0){
        return $query->with('RelationCampaignContacts')->first()->RelationCampaignContacts;
      }
      return Campaigns::where('id',$id)->first();
    }
    public function getUnityCountSentEachUpload($id,$date,$type){
      return $this->where('campaign_id',$id)->where('created_at',$date)->where('is_email_sent',$type)->count();
    }
    public function getUnityCountPendingEachUpload($id,$date,$type){
      return $this->where('campaign_id',$id)->where('created_at',$date)->where('is_email_sent',$type)->count();
    }
}
