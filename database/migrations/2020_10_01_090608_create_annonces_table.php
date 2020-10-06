<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("fichier_id")->nullable();
            $table->string("image")->nullable();
            $table->text("description");
            $table->dateTime("date_pub");
            $table->integer("cout");
            $table->integer("quantite");
            $table->date("disponibilite");
            $table->integer("statut_ann");
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
        Schema::dropIfExists('annonces');
    }
}
