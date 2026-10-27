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
        Schema::create('n_c_c_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ten', 100);
            $table->string('diachi', 100)->nullable();
            $table->string('sdt', 20)->nullable();
            $table->string('email', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_c_c_s');
    }
};
