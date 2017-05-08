<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
                $table->string('admission_date');
            $table->string('sale_price');
            $table->string('offer_price');
            $table->string('comission');
            $table->string('financing');
            $table->string('building');
            $table->string('piso');
            $table->string('no_dpto');
            $table->string('referencies');
            $table->string('antiquily');
            $table->string('legal_document');
            $table->string('avaluo');
            $table->string('delivery_time');
            $table->string('additional_inf');
            $table->string('bedrooms');
            $table->string('kitchens');
            $table->string('bathrooms');
            $table->string('livingrooms');
            $table->string('garages');
            $table->string('asensors');
            $table->string('suite');
            $table->string('pantry');
            $table->string('deskrooms');
            $table->string('servicesrooms');
            $table->string('storages');
            $table->string('others');
            $table->string('surface_area');
            $table->string('surface_builder');
            $table->string('street');
            $table->string('maps');
            $table->integer('zone_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('type_property_id')->unsigned();
            $table->integer('owner_current_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('state_id')->unsigned();

            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('type_property_id')->references('id')->on('type_property');
            $table->foreign('owner_current_id')->references('id')->on('owner_current');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::drop('properties');
    }
}
