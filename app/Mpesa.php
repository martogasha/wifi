<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mpesa extends Model
{
    protected $fillable = [
        'senderFirstName','senderMiddleName','senderLastName','reference','status','system','amount','date','phone','user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
