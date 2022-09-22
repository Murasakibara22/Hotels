<?php

namespace App\Models;

use App\Models\SottoCategorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'libelle',
        'description',
        'created_at',
        'updated_at',
        'photos',
    ];

    public function SottoCat() {
        return $this->hasMany(SottoCategorie::class);
    }
}
