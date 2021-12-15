<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('nm_local');
            $table->string('ds_local');
            $table->string('ds_endereco');
            $table->string('ds_tafira');
            $table->string('pg_entrada'); //tentei migrar com integer
            $table->string('cd_cidade');
            $table->string('cd_estado');
            $table->string('cd_categoria');
            $table->string('img_link');
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
        Schema::dropIfExists('locals');
    }
}
