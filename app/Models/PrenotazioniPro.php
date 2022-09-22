<?php

namespace App\Models;

use App\Models\Prodotti;
use App\Models\Prenotazioni;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrenotazioniPro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_prodotti',
        'id_prenotazioni',
    ];

}
