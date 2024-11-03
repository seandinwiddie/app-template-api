<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('initial_state', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->json('value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('initial_state');
    }
};
