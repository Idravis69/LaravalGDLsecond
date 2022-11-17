<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'typeboite',
        'immatriculation',
        'couleur',
        'nportes',
        'klm',
        'nplaces',
        'climatisation',
        'carburant',
        'categorie',
        'photo',
        'permis',
        'prixparj'
    ];


public function user() {
    return $this->belongsTo(User::class);
}

}
