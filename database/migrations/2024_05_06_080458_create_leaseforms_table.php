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
        Schema::create('leaseforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('DateForApply');
            $table->string('ProjectName');
            $table->string('ProjectCategory');
            $table->string('CapitalProject');
            $table->string('NoOfEmployee');
            $table->string('AreaRequired');
            $table->string('ShopNo');
            $table->string('RentType');
            $table->string('MultisideShop');
            $table->string('RentPeriod');
            $table->string('ServiceRequiredByRahinaPark');
            $table->string('InTheProject');
            $table->text('Description');
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
        Schema::dropIfExists('leaseforms');
    }
};
