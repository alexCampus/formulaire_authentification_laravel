<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable= [
    'titre', 'content', 'user_id', 
    ];

    public function user()
    {
    	return $this->belongsTo(\App\User::class);
    }
}
