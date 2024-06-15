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
            $table->id();
            $table->timestamps();
            $table->string('event_title');
            $table->text('event_description');
            $table->date('event_date');
            $table->date('end_date');
            $table->date('registration_date');
            $table->date('registration_end_date');
            $table->string('event_time');
            $table->string('organizer_name');
            $table->enum('event_type', ['seminar', 'webinar']);
            $table->string('event_location')->nullable();
            $table->string('event_link')->nullable();
            $table->enum('payment_status', ['paid', 'free']);
            $table->string('event_price')->nullable();
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