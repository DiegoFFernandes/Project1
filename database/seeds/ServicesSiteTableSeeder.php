<?php

use App\Model\ServicesSite;
use Illuminate\Database\Seeder;

class ServicesSiteTableSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  ServicesSite::create([
   'title_services' => 'Funerária',
   'description' => 'Contamos com nossas unidades instaladas na região metropolitana de Curitiba e agora também em Ivaiporã antendendo todo vale do Ivai.',
  ]);
  ServicesSite::create([
   'title_services' => 'Plano Funerario',
   'description' => 'O Grupo Maximo possui planos funerais a partir de <strong>R$24,00</strong> mensais, sem limite de idade e sem grau de parentesco. Protegendo sua familia com preço que cabe no seu bolso.',
  ]);
  ServicesSite::create([
   'title_services' => 'Crematório',
   'description' => 'O Grupo Maximo conta também com opções de Jazigo e Terrenos, saiba mais entrando em contato com nossa central de atendimentos.',
  ]);
  ServicesSite::create([
   'title_services' => 'Cemitério',
   'description' => 'Uma alternativa ao sepultamento que consiste na transformação dos restos mortais  em cinzas. Método <strong>Ecológico</strong> que não afeta o meio ambiente, sendo também uma
   econômia a longo prazo.',
  ]);
 }
}