<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcheterPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acheter_packs', function (Blueprint $table) {
            $table->integer("user_id");
            $table->integer("pack_id");
            $table->date("date_achat");
            $table->date("date_fin");
            $table->integer("statut_pack");
            $table->timestamps();
            $table->primary(["user_id", "pack_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acheter_packs');
    }
}
