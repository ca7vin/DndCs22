<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'backgroundName',
        'skillProfiency',
        'langueProfiencyUpgrade',
        'equipmentUpgrade',
        'backgroundSkill',
    ]; // model_anchor
     
    protected $table = 'backgrounds';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
