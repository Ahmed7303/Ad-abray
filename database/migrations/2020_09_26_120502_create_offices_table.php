<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string("name_tm");
            $table->string("name_ru");
            $table->string("name_en");
            $table->string("responsible_tm");
            $table->string("responsible_ru");
            $table->string("responsible_en");
            $table->string("phone");
            $table->string("email");
            $table->string("address_tm");
            $table->string("address_ru");
            $table->string("address_en");
            $table->string("open_hours_tm");
            $table->string("open_hours_ru");
            $table->string("open_hours_en");
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
