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
        Schema::table('faturamentos', function (Blueprint $table) {
            $table->unsignedBigInteger('funcionario_id')->after('id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faturamentos', function (Blueprint $table) {
            $table->unsignedBigInteger('funcionario_id')->after('id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
        });
    }
};
