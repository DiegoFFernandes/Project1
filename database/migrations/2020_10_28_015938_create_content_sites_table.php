<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentSitesTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::dropIfExists('content_sites');
  Schema::create('content_sites', function (Blueprint $table) {
   $table->increments('id_content');
   $table->string('session', 20);
   $table->integer('id_services')->unsigned();
   $table->foreign('id_services')->references('id')->on('services_sites');
   $table->string('description')->nullable();
   $table->string('img');
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
  Schema::dropIfExists('content_sites');
 }
}
