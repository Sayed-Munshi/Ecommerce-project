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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 70);
            $table->string('photo', 50)->nullable();
            $table->string('role', 50)->nullable();
            $table->string('phone')->nullable();
            $table->string('about')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
