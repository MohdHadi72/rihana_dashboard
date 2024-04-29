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
     * 
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('HomeImg1');
            $table->string('HomeImg2');
            $table->string('HomeImg3');
            $table->string('HomeHeading1');
            $table->string('HomeHeading2');
            $table->string('HomeHeading3');
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
        Schema::dropIfExists('homepages');
    }
};
