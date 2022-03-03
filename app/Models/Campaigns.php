<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'status',
    ];

    public function getDescRecords(){
      return $this->orderByDesc('id')->get();
    }
}
