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
            $table->integer("structure_id")->nullable();
            $table->integer("user_id")->nullable();
            $table->string("nom", 100);
            $table->string("prenom", 100)->nullable();
            $table->date("datenaiss");
            $table->string("lieunaiss", 100)->nullable();
            $table->string("tel", 100)->nullable();
            $table->string("email", 100);
            $table->string("cq", 100)->nullable();
            $table->string("ville", 100)->nullable();
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
