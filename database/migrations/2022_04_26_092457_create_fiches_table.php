<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiches', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users", "id");
            $table->string('namePerso');
            $table->string('class');
            $table->integer('level')->unsigned();
            // $table->string('background');
            $table->string('race');
            $table->string('alignment');
            $table->integer('experience')->unsigned();
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('constitution');
            $table->integer('intelligence');
            $table->integer('wisdom');
            $table->integer('charisma');
            $table->integer('passive_wisdom')->unsigned();
            $table->integer('inspiration')->unsigned();
            $table->integer('proficiency');
            $table->integer('save_strength');
            $table->integer('save_dexterity');
            $table->integer('save_constitution');
            $table->integer('save_intelligence');
            $table->integer('save_wisdom');
            $table->integer('save_charisma');
            $table->integer('acrobatics');
            $table->integer('animal_handling');
            $table->integer('arcana');
            $table->integer('athletics');
            $table->integer('deception');
            $table->integer('history');
            $table->integer('insight');
            $table->integer('intimidation');
            $table->integer('investigation');
            $table->integer('medicine');
            $table->integer('nature');
            $table->integer('perception');
            $table->integer('performance');
            $table->integer('persuasion');
            $table->integer('religion');
            $table->integer('sleight_of_hand');
            $table->integer('stealth');
            $table->integer('survival');
            $table->integer('armor_class')->unsigned();
            $table->integer('initiative');
            $table->float('speed')->unsigned();
            $table->integer('current_hitpoints')->unsigned();
            $table->integer('temporary_hitpoints')->unsigned();
            $table->string('hit_dice');
            $table->text('personality_traits');
            $table->text('personality_ideals');
            $table->text('personality_bonds');
            $table->text('personality_flaws');
            $table->text('profiencies_languages');
            $table->text('features_traits');
            $table->string('avatar');
            $table->string('spellcasting_class');
            $table->string('spellcasting_ability');
            $table->integer('spell_save_dc')->unsigned();
            $table->integer('spell_attack_bonus')->unsigned();
            $table->integer('platinum_coins')->unsigned();
            $table->integer('gold_coins')->unsigned();
            $table->integer('silver_coins')->unsigned();
            $table->integer('copper_coins')->unsigned();
            $table->text('inventory');
            $table->string('weapon1');
            $table->integer('bonus_attack1')->unsigned();
            $table->integer('bonus_damage1')->unsigned();
            $table->string('type_damage1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiches');
    }
};
