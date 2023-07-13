<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('lawyer_firstname');
            $table->string('lawyer_lastname');
            $table->string('lawyer_phonenumber');
            $table->string('lawyer_email');
            $table->string('lawyer_address');
            $table->string('lawyer_file');
            $table->string('lawyer_information');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawyers');
    }
}
