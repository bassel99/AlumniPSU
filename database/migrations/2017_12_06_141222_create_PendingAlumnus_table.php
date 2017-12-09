<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingAlumnusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Some of them are nullable because registered alumni might add a new
        //alumni, so it is ok here.
        //arabic name and english name are nullable because we don't
        //know in which language the name will be provided by the registered
        //by the registered alumni
        //
        //However; every field will be validated on the browser level and
        //on the server level by the controllers, and this is a pending table and not
        //the primary table, so it will be ok..
        Schema::create('PendingAlumnus', function (Blueprint $table) {
            $table->increments('sequence');
            $table->string('id')->nullable();
            $table->string('englishName')->nullable();
            $table->string('arabName')->nullable();
            $table->string('major');
            $table->decimal('GPA',4,2)->nullable();
            $table->string('nationality')->nullable();
            $table->string('graduation_year');
            $table->string('companyCoop')->nullable();
            $table->string('afterGraduation')->nullable();
            $table->string('jobTitle')->nullable();
            $table->string('employerContactInfo')->nullable();
            $table->string('employer')->nullable();
            $table->string('timeForJob')->nullable();
            $table->string('contactNumbers')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('PendingAlumnus');
    }
}
