<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magesort extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'sort',
        'niveau',
        'ecole',
        'incantation',
        'concentration',
        'description',
        'portee',
    ]; // model_anchor
     
    protected $table = 'magesorts';
}
