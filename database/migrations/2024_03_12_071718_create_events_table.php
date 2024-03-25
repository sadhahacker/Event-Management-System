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
        Schema::create('events', function (Blueprint $table) {
            $table->id('EventID');
    $table->string('Title');
    $table->text('Description')->nullable();
    $table->string('Category');
    $table->string('Location')->nullable();
    $table->timestamp('StartDateTime');
    $table->timestamp('EndDateTime')->nullable();
    $table->integer('MaxAttendees');
    $table->integer('CurrentAttendees')->default(0);
    $table->string('Image')->nullable();
    $table->timestamp('RegistrationDeadline')->nullable();
    $table->decimal('RegistrationFee', 8, 2);
    $table->boolean('Featured')->default(false);
    $table->enum('Status', ['draft', 'published', 'canceled'])->default('draft');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
