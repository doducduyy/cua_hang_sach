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
        Schema::create('vaitros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tenvaitro', 100);
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dang_nhap', 100)->unique();
            $table->string('mk', 255);
            $table->string('ho_ten', 255);
            $table->string('sdt', 20)->nullable();
            $table->string('trang_thai', 50)->default('HoatDong');
            $table->foreignId('vai_tro_id')->constrained('vaitros')->onDelete('restrict');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
        Schema::dropIfExists('vaitros');
    }
};
