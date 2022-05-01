<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('highlights', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('is_show');
            $table->string('title');
            $table->text('content');
        });
    }

    public function down()
    {
        Schema::dropIfExists('highlights');
    }
};
