<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'className',
    ]; // model_anchor
     
    protected $table = 'classes';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
