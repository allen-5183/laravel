<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('students', function (Blueprint $table) {
         $table->increments('cID');
         $table->string('cName',20);
         $table->enum('cSex', ['M', 'F']);
         $table->date('cBirthday');
         $table->string('cEmail',100)->nullable();
         $table->string('cPhone',50)->nullable();
         $table->string('cAddr',255)->nullable();
         $table->integer('cHeight')->nullable();
         $table->integer('cWeight')->nullable();
         // $table->id();
         // $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}