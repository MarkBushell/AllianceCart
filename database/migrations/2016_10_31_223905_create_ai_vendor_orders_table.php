<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAiVendorOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai_vendor_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imageone');
            $table->string('itemtitle');
            $table->text('description');
            $table->decimal('priceone', 5, 2);
            $table->decimal('pricetwo', 5, 2);
            $table->integer('stocklevel');
            $table->string('salecategory');
            $table->string('productcategory');
            $table->string('brand');
            $table->integer('vendorid');
            $table->string('size');
            $table->string('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ai_vendor_orders');
    }
}
