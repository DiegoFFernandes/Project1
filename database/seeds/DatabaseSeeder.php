<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
 /**
  * Seed the application's database.
  *
  * @return void
  */
 public function run()
 {
  $this->call(UsersTableSeeder::class);
  $this->call(ServicesSiteTableSeeder::class);
  $this->call(ContentSiteTableSeeder::class);
  $this->call(ItemServiceSeeder::class);
 }
}