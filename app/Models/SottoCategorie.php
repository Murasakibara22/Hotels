<?php

namespace App\Models;

use App\Models\Prodotti;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SottoCategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'libelle',
        'description',
        'photo',
        'id_categorie',
    ];

    public function pro() {
        return $this->hasMany(Prodotti::class);
    }

    public function cat() {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }
}
