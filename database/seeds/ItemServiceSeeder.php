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

   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Urnas com acabamento envernizado;',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Coroa de flores naturais ou artificiais;',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Véu em tule;',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Translado de até 100 km rodados;',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Carro funerário para cortejo fúnebre;',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Paramentos de acordo com a religião (Suporte e castiçais);',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Aluguel de capela conveniada ou municipal;',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Livro de registro de presença em velório;',
   ]);
   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Assistência profissional para liberação do corpo;',
   ]);
   ItemServicesSite::create([
    'id_itemservices' => 6,
    'description'     => 'Lanche para o velório (cortesia);',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 9,
    'description'     => 'Coroas de Flores',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 9,
    'description'     => 'Arranjos',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 9,
    'description'     => 'Placas para Túmulos',
   ]);

   ItemServicesSite::create([
    'id_itemservices' => 9,
    'description'     => 'Santinhos',
   ]);



 }
}
