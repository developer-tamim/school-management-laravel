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
            $table->string('name');
            $table->string('semester');
            $table->string('department');
            $table->integer('roll');
            $table->integer('registration');
            $table->string('email');
            $table->string('contact');
            $table->date('dob');
            $table->integer('nid');
            $table->date('admission_date');
            $table->integer('passing_year');
            $table->float('cgpa');
            $table->string('father_name');
            $table->string('father_contact');
            $table->string('mother_name');
            $table->string('mother_contact');
            $table->longText('present_address');
            $table->longText('permanent_address');
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

//   - id
//   - name
//   - roll
//   - registration
//   - email
//   - contact
//   - father & mother name
//   - family contact number
//   - present & permanent address
//   - admission date
//   - passing year
//   - cgpa
