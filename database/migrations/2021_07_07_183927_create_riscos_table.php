<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiscosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riscos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50)->unique();
            $table->unsignedBigInteger('tipo_risco_id');
            $table->foreign('tipo_risco_id')->references('id')->on('tipo_riscos');
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
        Schema::dropIfExists('riscos');
    }
}
