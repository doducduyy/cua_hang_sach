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
        Schema::create('chi_tiet_phieus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phieu_nhap_id')->constrained('phieu_nhaps')->onDelete('restrict');
            $table->foreignId('sach_id')->constrained('saches')->onDelete('restrict');
            $table->integer('soluong')->default(0);
            $table->unsignedBigInteger('dongia')->default(0);
            $table->unsignedBigInteger('thanhtien')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_phieus');
    }
};
