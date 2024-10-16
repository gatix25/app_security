<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('logins', function (Blueprint $table) {
            $table->dropColumn('password');
        });
    }

    public function down()
    {
        Schema::table('logins', function (Blueprint $table) {
            $table->string('password')->nullable();
        });
    }
};
