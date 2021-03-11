<?php

use App\Model\ItemServicesSite;
use Illuminate\Database\Seeder;

class ItemServiceSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  ItemServicesSite::create([
    'id_itemservices' => 5,
    'description'     => 'Araucária – PR',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 5,
    'description'     => 'Fazenda Rio Grande – PR',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 5,
    'description'     => 'Itaperuçu – PR',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 5,
    'description'     => 'Pinhas – PR',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 5,
    'description'     => 'Rio Branco do Sul – PR',
   ]);



 }
}
