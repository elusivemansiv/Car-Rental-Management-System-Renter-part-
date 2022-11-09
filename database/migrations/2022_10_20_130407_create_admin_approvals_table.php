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
        Schema::create('admin_approvals', function (Blueprint $table) {
            $table->id();
            $table->integer("renter_name");
            $table->integer("customer_name");
            $table->date("rent_date");
            $table->integer("car_details");
            $table->integer("rent_price");
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
        Schema::dropIfExists('admin_approvals');
    }
};
