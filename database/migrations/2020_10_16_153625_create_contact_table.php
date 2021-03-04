<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('contacts', function (Blueprint $table) {
   $table->bigIncrements('id');
   $table->string('name', 150)->nullable();
   $table->string('phone', 50)->nullable();
   $table->string('email', 50)->nullable();
   $table->string('subject', 30)->nullable();
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
  Schema::dropIfExists('contacts');
 }
}