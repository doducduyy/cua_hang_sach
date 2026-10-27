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
        Schema::create('saches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ten', 100);
            $table->string('tacgia', 100)->nullable();
            $table->string('nha_xuat_ban', 100)->nullable();
            $table->unsignedBigInteger('gianhap')->default(0);
            $table->unsignedBigInteger('giaban')->default(0);
            $table->integer('soluong')->default(0);
            $table->text('mota')->nullable();
            $table->string('vitri', 100)->nullable();
            $table->string('img', 255)->nullable();
            $table->foreignId('the_loai_id')->constrained('the_loais')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saches');
    }
};
