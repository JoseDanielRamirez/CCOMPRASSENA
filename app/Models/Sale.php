<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function person(){
        return $this->belongsTo(Person::class,'client_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
