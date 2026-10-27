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
        Schema::create('phieu_nhaps', function (Blueprint $table) {
            $table->id();
            $table->dateTime('ngay_nhap')->useCurrent();
            $table->unsignedBigInteger('tong_tien')->default(0);
            $table->timestamps();
            $table->foreignId('n_c_c_id')->constrained('n_c_c_s')->onDelete('restrict');
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieu_nhaps');
    }
};
