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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('name');
            $table->string('eng_name');
            $table->string('fh_name');
            $table->string('birth');
            $table->string('blood_type');
            $table->string('no_street');
            $table->string('city');
            $table->string('district');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('wp_no');
            $table->string('email');
            $table->string('adhar_no')->nullable();
            $table->string('optradio')->nullable();
            $table->string('cert_10')->nullable();
            $table->string('certi_12')->nullable();
            $table->string('voter')->nullable();
            $table->string('family_card')->nullable();
            $table->string('adhar_card')->nullable();
            $table->string('yr')->nullable();
            $table->string('application_status')->nullable();
            $table->string('book_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
