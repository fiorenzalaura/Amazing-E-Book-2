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
        //
        Schema::create('account', function(Blueprint $table)
        {
            $table->id();
            $table->unsignedBigInteger('gender_id');
            $table->string('first_name', 25);
            $table->string('middle_name', 25);
            $table->string('last_name', 25);
            $table->string('email', 50);
            $table->string('password');
            $table->string('display_picture_link', 255);
            $table->integer('delete_flag');
            $table->date('modified_at');
            $table->string('modified_by', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
