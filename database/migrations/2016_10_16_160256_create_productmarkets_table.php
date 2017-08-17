<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductmarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productmarkets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imageone');
            $table->string('imagetwo');
            $table->string('imagethree');
            $table->string('imagefour');
            $table->string('title');
            $table->text('description');
            $table->decimal('priceone', 5, 2);
            $table->decimal('pricetwo', 5, 2);
            $table->integer('stocklevel');
            $table->string('retailername');
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
        Schema::dropIfExists('productmarkets');
    }
}
