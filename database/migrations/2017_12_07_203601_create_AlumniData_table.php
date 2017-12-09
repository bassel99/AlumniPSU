<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnidatas', function (Blueprint $table) {
            $table->string('id');
            $table->string('englishName');
            $table->string('arabName');
            $table->string('major');
            $table->decimal('GPA',4,2);
            $table->string('nationality');
            $table->string('graduation_year');
            $table->string('companyCoop');
            $table->string('afterGraduation');
            $table->string('jobTitle');
            $table->string('employerContactInfo');
            $table->string('employer');
            $table->string('timeForJob');
            $table->string('contactNumbers');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnidatas');
    }
}
