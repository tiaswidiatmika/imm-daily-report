<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('kasi');
            $table->string('spv');
            $table->string('opis');
            $table->string('paspor_indonesia');
            $table->string('diplomatik');
            $table->string('foreigner');
            $table->string('tata_usaha');
            $table->string('protokoler');
            $table->string('kru');
            $table->string('honorer');
            $table->string('other');

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
        Schema::dropIfExists('formations');
    }
}
