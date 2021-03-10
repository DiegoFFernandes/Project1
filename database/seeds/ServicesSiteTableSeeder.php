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
   'description'    => 'Contamos com nossas unidades instaladas na região metropolitana de Curitiba e agora também em Ivaiporã antendendo todo vale do Ivai.',
   'position_site'  => 1,
  ]);
  ServicesSite::create([
   'title_services' => 'Plano Funerario',
   'description'    => 'O Grupo Maximo possui planos funerais a partir de <strong>R$24,00</strong> mensais, sem limite de idade e sem grau de parentesco. Protegendo sua familia com preço que cabe no seu bolso.',
   'position_site'  => 1,
  ]);
  ServicesSite::create([
   'title_services' => 'Cemitério',
   'description'    => 'O Grupo Maximo conta também com opções de Jazigo e Terrenos, saiba mais entrando em contato com nossa central de atendimentos.',
   'position_site'  => 1,
  ]);
  ServicesSite::create([
   'title_services' => 'Crematório',
   'description'    => 'Uma alternativa ao sepultamento que consiste na transformação dos restos mortais  em cinzas. Método <strong>Ecológico</strong> que não afeta o meio ambiente, sendo também uma
   econômia a longo prazo.',
   'position_site'  => 1,
  ]);

  //Inicio trecho mais detalhados dos nossos serviços
  ServicesSite::create([
    'title_services' => 'Nossos Serviços',
    'description'    => 'Se destacando com o que a de melhor do mercado, conheça um pouco de nossos serviços.',
    'position_site'  => 2,
   ]);

  ServicesSite::create([
   'title_services' => 'Funerária',
   'description'    => 'Estamos localizados na região metropolitana de Curitiba e agora também atendendo o Vale do Ivai, com nossa sede na cidade de Ivaiporã.',
   'position_site'  => 2,
  ]);
  ServicesSite::create([
   'title_services' => 'Plano Funerario',
   'description'    => 'O Grupo Maximo possui planos funerais a partir de <strong>R$24,00</strong> mensais, sem limite de idade e sem grau de parentesco. Tranquilidade e segurança para sua familia!',
   'position_site'  => 2,
  ]);
  ServicesSite::create([
   'title_services' => 'Crematório',
   'description'    => 'O ato de Cremação tem sido a cada dia mais reconhecido e procurado no mercado, devido ao seu processo que oferece mais praticidade e economia.
    </br>Sendo uma alternativa ao sepultamento consistindo na transformação dos restos mortais em cinzas. Método Ecológico que não afeta o meio ambiente, além de ser uma economia a longo prazo.',
   'position_site'  => 2,
  ]);
  ServicesSite::create([
    'title_services' => 'Serviços Adicionais',
    'description'    => '',
    'position_site'  => 2,
   ]);
 }
}
