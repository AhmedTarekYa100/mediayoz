<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $guarded = [];



    ####### Relations
    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
