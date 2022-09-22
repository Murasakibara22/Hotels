<?php

namespace App\Models;

use App\Models\Prenotazioni;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prodotti extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'description',
        'prix',
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        'qte_stock',
        'Status',
        'id_sottocategorie',
    ];

    public function pre() {
        return $this->belongsToMany(Prenotazioni::class);
    }

    public function paga() {
        return $this->belongsTo(SottoCategorie::class, 'id_sottocategorie');
    }
}
