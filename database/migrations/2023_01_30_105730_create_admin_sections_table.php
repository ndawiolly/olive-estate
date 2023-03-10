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
        Schema::create('admin_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('u_name');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email');
            $table->string('my_password',300);
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
        Schema::dropIfExists('admin_sections');
    }
};
