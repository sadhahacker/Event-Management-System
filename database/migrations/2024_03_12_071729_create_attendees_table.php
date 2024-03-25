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
        Schema::create('attendees', function (Blueprint $table) {
            $table->id('AttendeeID');
            $table->foreignId('UserID')->constrained('users','UserID');
            $table->foreignId('EventID')->constrained('events','EventID');
            $table->timestamp('RegistrationDate')->nullable();
            $table->enum('AttendanceStatus', ['registered', 'checked in', 'canceled'])->default('registered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendees');
    }
};
