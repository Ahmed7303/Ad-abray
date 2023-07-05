<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('border_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('border_id')->unsigned();
            $table->foreign('border_id')->references('id')->on('borders')->onDelete('cascade');
            $table->string('type');
            $table->string('title');
            $table->text('image');

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
        Schema::dropIfExists('border_items');
    }
}
