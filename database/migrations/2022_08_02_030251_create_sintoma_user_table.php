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
        Schema::create('users_sintoma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sintoma_id');
            $table->unsignedBigInteger('users_id');
        
            $table->foreign('sintoma_id')->references('id')->on('sintoma')
                        ->onUpdate('cascade')->onDelete('cascade');
                        
            $table->foreign('users_id')->references('id')->on('users')
                        ->onUpdate('cascade')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_sintoma');
    }
};
