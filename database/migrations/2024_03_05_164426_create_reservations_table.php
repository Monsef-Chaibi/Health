<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->unsignedBigInteger('service_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('assignee_name');
            $table->boolean('is_confirmed')->default(false); // Add is_confirmed column
            $table->string('confirmation_token')->nullable()->unique();
            $table->timestamps();

            // Assuming you have a 'services' table and 'service_id' is a foreign key
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
