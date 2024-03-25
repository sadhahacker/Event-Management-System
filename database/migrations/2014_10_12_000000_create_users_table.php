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
            $table->id('UserID');
            $table->string('Username');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('City');
            $table->string('State');
            $table->string('Zip');
            $table->string('Email')->unique();
            $table->integer('MobileNumber');
            $table->string('Password');
            $table->string('UserType')->default('attendee');
            $table->string('ProfilePicture')->nullable();
            $table->text('Bio')->nullable();
            $table->timestamp('RegistrationDate')->nullable();
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
