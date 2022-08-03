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
        Schema::create('users_notificacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notificacion_id');
            $table->unsignedBigInteger('users_id');
            
            $table->foreign('notificacion_id')->references('id')->on('notificacion')
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
        Schema::dropIfExists('users_notificacion');
    }
};
