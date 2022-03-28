<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pnj extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'prenom',
        'nom',
        'age',
        'image',
        'description',
    ]; // model_anchor
     
    protected $table = 'pnjs';
}
