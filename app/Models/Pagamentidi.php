<?php

namespace App\Models;

use App\Models\Prenotazioni;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pagamentidi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type',
        'date',
        'created_at',
        'updated_at',
    ];

    public function pre() {
        return $this->hasMany(Prenotazioni::class);
    }
}
