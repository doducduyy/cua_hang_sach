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
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('ngay_ban')->useCurrent();
            $table->string('phuong_thuc_thanh_toan', 100)->nullable();
            $table->string('trangthai', 50)->default('DathanhToan');
            $table->unsignedBigInteger('tong_tien')->default(0);
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
