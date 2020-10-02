<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->integer("structure_id");
            $table->integer("user_id");
            $table->string("nom", 100);
            $table->string("prenom", 100);
            $table->date("datenaiss");
            $table->string("lieunaiss", 100);
            $table->string("tel", 100);
            $table->string("email", 100);
            $table->string("cq", 100);
            $table->string("ville", 100);
            $table->string("photo", 100)->nullable();
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
        Schema::dropIfExists('personnes');
    }
}
