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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('f_name');
            $table->string('l_name');
            $table->string('dp')->nullable();
            $table->string('occupation')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('facebook')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('insta')->nullable();
            $table->string('linkdin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('f_name');
            $table->string('l_name');
            $table->string('occupation')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('facebook')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('insta')->nullable();
            $table->string('linkdin')->nullable();
        });
    }
};
    