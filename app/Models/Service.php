<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];


    ##  Mutators and Accessors
    public function getImageAttribute()
    {
        return get_file($this->attributes['image']);
    }

    ##  Relations
    public function projects(){
        return $this->hasMany(Project::class,'service_id');
    }

}
