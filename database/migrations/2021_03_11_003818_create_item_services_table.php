<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('item_services_sites');
        Schema::create('item_services_sites', function (Blueprint $table) {  
            $table->bigIncrements('id');                   
            $table->integer('id_itemservices')->unsigned();
            $table->foreign('id_itemservices')->references('id')->on('services_sites');
            $table->string('description')->nullable(); 
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
        Schema::dropIfExists('item_services_sites');
    }
}
