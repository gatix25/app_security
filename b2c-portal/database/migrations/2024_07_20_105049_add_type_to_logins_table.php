<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('logins', function (Blueprint $table) {
            $table->string('type')->nullable(); // Přidání textového sloupce pro typ aktivity
        });
    }
    
    public function down(): void
    {
        Schema::table('logins', function (Blueprint $table) {
            $table->dropColumn('type'); // Odstranění sloupce 'type'
        });
    }
    
};
