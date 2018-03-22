<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->default('');
            $table->string('last_name')->default('');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('company')->default('');
            $table->string('phone')->default('');
            $table->string('country')->default('');
            $table->string('address')->default('');
            $table->string('city')->default('');
            $table->string('state')->default('');
            $table->string('zip_code')->default('');
            $table->string('billing_first_name')->default('');
            $table->string('billing_last_name')->default('');
            $table->string('billing_company')->default('');
            $table->string('billing_email')->default('');
            $table->string('billing_phone')->default('');
            $table->string('billing_country')->default('');
            $table->string('billing_address_1')->default('');
            $table->string('billing_address_2')->default('')->nullable();
            $table->string('billing_city')->default('')->nullable();
            $table->string('billing_state')->default('')->nullable();
            $table->string('billing_postcode')->default('')->nullable();

            $table->string('shipping_first_name')->default('');
            $table->string('shipping_last_name')->default('');
            $table->string('shipping_company')->default('');
            $table->string('shipping_email')->default('');
            $table->string('shipping_phone')->default('');
            $table->string('shipping_country')->default('');
            $table->string('shipping_address_1')->default('');
            $table->string('shipping_address_2')->default('')->nullable();
            $table->string('shipping_city')->default('')->nullable();
            $table->string('shipping_state')->default('')->nullable();
            $table->string('shipping_postcode')->default('')->nullable();
            $table->unsignedInteger('role')->default(2);
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
        Schema::dropIfExists('users');
    }
}
