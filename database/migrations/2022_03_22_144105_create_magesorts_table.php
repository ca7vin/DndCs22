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
        Schema::create('magesorts', function (Blueprint $table) {
            $table->id();
            $table->string('sort');
            $table->string('niveau');
            $table->string('ecole');
            $table->string('incantation');
            $table->string('concentration');
            $table->string('description');
            $table->string('portee');
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
        Schema::dropIfExists('magesorts');
    }
};
