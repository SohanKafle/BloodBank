<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user');
            $table->string('phone');
            $table->string('bloodgroup');
            $table->string('photopath');
            $table->integer('age');
            $table->string('address');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropColumn('role');
            Schema::dropColumn('phone');
            Schema::dropColumn('bloodgroup');
            Schema::dropColumn('photopath');
            Schema::dropColumn('age');
            Schema::dropColumn('address');




          


        });
    }
};