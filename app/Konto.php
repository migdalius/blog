<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konto extends Model
{
    protected $guarded = [];

    public function user()
    {
    	// $konto->user->name
    	return $this->belongsTo(User::class);
    }
}
