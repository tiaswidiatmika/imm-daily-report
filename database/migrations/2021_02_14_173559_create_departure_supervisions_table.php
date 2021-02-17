<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartureSupervisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departure_supervisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade')->nullable();
            $table->string('name')->default('nihil');
            $table->string('sex')->default('nihil');
            $table->string('nationality')->default('nihil');
            $table->string('passport_number')->default('nihil');
            $table->string('office')->default('nihil');
            $table->string('code')->default('nihil');
            $table->string('flight_number')->default('nihil');

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
        Schema::dropIfExists('departure_supervisions');
    }
}
