<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("order_id")->unique();
            $table->integer('user_id');
            $table->string("company");
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("type");
            $table->integer("weight");
            $table->string("current_process");
            $table->string("delivered_at")->nullable();

            $table->string("pick_up_city");
            $table->string("pick_up_country");
            $table->string("pick_up_street");
            $table->string("pick_up_zip");
            $table->float("pick_up_lat");
            $table->float("pick_up_lon");

            $table->string("drop_off_city");
            $table->string("drop_off_country");
            $table->string("drop_off_street");
            $table->string("drop_off_zip");
            $table->float("drop_off_lat");
            $table->float("drop_off_lon");

            $table->string("current_address")->nullable();
            $table->float("current_lat")->nullable();
            $table->float("current_lon")->nullable();

            $table->integer("distance")->default(0);
            $table->integer("distance_to_current")->default(0);
            
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
