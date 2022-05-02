<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('tech_stacks', function (Blueprint $table) {
            $table->string('expertise')->nullable();
        });
    }

    public function down()
    {
        Schema::table('tech_stacks', function (Blueprint $table) {
            $table->dropIfExists('expertise');
        });
    }
};
