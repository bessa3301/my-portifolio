<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('highlights', function (Blueprint $table) {
            $table->string('banner_path')->nullable();
        });
    }

    public function down()
    {
        Schema::table('highlights', function (Blueprint $table) {
            $table->dropIfExists('banner_path');
        });
    }
};
