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
        Schema::create('daftar_apis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jenis_api')->nullable()->constrained('jenis_apis')->onDelete('cascade');
            $table->foreignId('id_perangkat_daerah')->nullable()->constrained('perangkat_daerahs')->onDelete('cascade');
            $table->string('endpoint')->nullable();
            $table->string('api_key')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_apis');
    }
};
