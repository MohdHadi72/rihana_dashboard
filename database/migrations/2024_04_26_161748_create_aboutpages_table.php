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
        Schema::create('aboutpages', function (Blueprint $table) {
            $table->id();
           $table->string('AboutHeadingOne');
           $table->string('AboutHeadingTwo');
           $table->string('AboutHeadingThree');
           $table->string('AboutHeadingFour');
           $table->string('AboutPeragraphOne');
           $table->string('AboutPeragraphTwo');
           $table->string('AboutPeragraphThree');
           $table->string('AboutPeragraphFour');
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
        Schema::dropIfExists('aboutpages');
    }
};
