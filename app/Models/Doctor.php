<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // public function hospital() {
    //     return $this->belongsTo('App\Models\Hospital', 'hospital_id', 'd_id');
    // }

    // public function availabilities() {
    //     return $this->hasMany('App\Models\Availability', 'doctor_id', 'd_id');
    // }
}
