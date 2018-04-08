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
            $table->increments('id');
            $table->string('name')->default('');
            $table->unsignedInteger('price')->default(0);
            $table->unsignedInteger('sale_number')->default(0);
            $table->text('description')->nullable();
            $table->string('cotton')->default('');
            $table->string('made')->default('');
            $table->string('avatar')->default('');
            $table->string('image_1')->default('')->nullable();
            $table->string('image_2')->default('')->nullable();
            $table->string('image_3')->default('')->nullable();
            $table->string('image_4')->default('')->nullable();
            $table->string('machine')->default('')->nullable();
            $table->string('note_1')->default('')->nullable();
            $table->string('note_2')->default('')->nullable();
            $table->string('note_3')->default('')->nullable();

            $table->rememberToken();
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
