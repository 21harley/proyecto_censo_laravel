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
            $table->unsignedBigInteger('id_notificacion');
            $table->unsignedBigInteger('id_user');
            $table->string('state');
            
            $table->foreign('id_notificacion')->references('id')->on('notificacion')
                        ->onUpdate('cascade')->onDelete('cascade');
                        
            $table->foreign('id_user')->references('id')->on('users')
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
