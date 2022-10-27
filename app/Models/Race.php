<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'race',
        // 'caract',
        // 'vitesse',
        // 'taille',
        // 'maitrise',
        // 'features',
        // 'langue',
        // 'sort',
    ]; // model_anchor
     
    protected $table = 'races';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
