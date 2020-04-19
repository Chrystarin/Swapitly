<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
            $table->string('category');
            $table->string('quality');
            $table->integer('quantity');
            $table->string('location');
            $table->mediumText('description');
            $table->mediumText('reason_for_trading');
            $table->string('desired_item');
            $table->string('tags');
            $table->boolean('pickup')->nullable()->default(false);
            $table->boolean('delivery')->nullable()->default(false);
            $table->boolean('meetup')->nullable()->default(false);
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
        Schema::dropIfExists('products');
    }
}
