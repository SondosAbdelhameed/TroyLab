<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('students', function (Blueprint $table) {
         $table->foreign('school_id')->references('id')->on('schools')->onUpdate('cascade');
       });

      Schema::table('users', function (Blueprint $table) {
        $table->foreign('user_type_id')->references('id')->on('user_types')->onUpdate('cascade');
      });

      Schema::table('schools', function (Blueprint $table) {
       $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  /*  public function down()
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('users');
        Schema::dropIfExists('schools');
    }*/
};
