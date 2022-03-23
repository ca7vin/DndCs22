<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'Image',
        'Joueur',
        'Nom',
        'Prenom',
        'Classe',
        'Niveau',
        'Experience',
        'Race',
    ]; // model_anchor
     
    protected $table = 'joueurs';
}
