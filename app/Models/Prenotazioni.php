<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pagamentidi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prenotazioni extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'arrive',
        'depart',
        'NbAdultes',
        'NbEnfants',
        'id_users',
        'id_pagamentidi',
    ];

    public function use() {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function paga() {
        return $this->belongsTo(Pagamentidi::class, 'id_pagamentidi');
    }

    public function pro() {
        return $this->belongsToMany(Prottodi::class);
    }
}
