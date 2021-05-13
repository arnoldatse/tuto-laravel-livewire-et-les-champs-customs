<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function service(){
        $this->hasMany(Service::class);
    }

    public function scopeSearch($query, $term){
        return $query->where('name', 'like', "%$term%")->get();
    }
}
