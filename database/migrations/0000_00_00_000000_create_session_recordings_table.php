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
        Schema::create('session_recordings', function (Blueprint $table): void {
            $table->id(); // Automatically sets an auto-incrementing unsigned BigInt primary key column
            $table->string('path');
            $table->string('session_id');
            $table->binary('recordings');
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete(); // Follows convention for foreign keys
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_recordings');
    }
};
