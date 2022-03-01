<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contacts extends Model
{
    use HasFactory,Notifiable;
    use Notifiable;
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
}
