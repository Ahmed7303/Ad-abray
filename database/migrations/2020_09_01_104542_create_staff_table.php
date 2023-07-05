<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string("name_tm");
            $table->string("name_ru");
            $table->string("name_en");
            $table->enum('type',['Air freight','Ocean freight','Road freight','Rail freight', 'Container Transport']);
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("address_tm")->nullable();
            $table->string("address_en")->nullable();
            $table->string("address_ru")->nullable();
            $table->string("hours_tm")->nullable();
            $table->string("hours_ru")->nullable();
            $table->string("hours_en")->nullable();
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
        Schema::dropIfExists('stuff');
    }
}
