<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'joueur_id',
        'name',
        'class',
        'level',
        'background',
        'race',
        'alignment',
        'experience',
        'strength',
        'dexterity',
        'constitution',
        'intelligence',
        'wisdom',
        'charisma',
        'passive_wisdom',
        'inspiration',
        'proficiency',
        'save_strength',
        'save_dexterity',
        'save_constitution',
        'save_intelligence',
        'save_wisdom',
        'save_charisma',
        'acrobatics',
        'animal_handling',
        'arcana',
        'athletics',
        'deception',
        'history',
        'insight',
        'intimidation',
        'investigation',
        'medicine',
        'nature',
        'perception',
        'performance',
        'persuasion',
        'religion',
        'sleight_of_hand',
        'stealth',
        'survival',
        'armor_class',
        'initiative',
        'speed',
        'current_hitpoints',
        'temporary_hitpoints',
        'hit_dice',
        'personality_traits',
        'personality_ideals',
        'personality_bonds',
        'personality_flaws',
        'profiencies_languages',
        'features_traits',
        'avatar',
        'spellcasting_class',
        'spellcasting_ability',
        'spell_save_dc',
        'spell_attack_bonus',
        'platinum_coins',
        'gold_coins',
        'silver_coins',
        'copper_coins',
    ]; // model_anchor
     
    protected $table = 'fiches';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
