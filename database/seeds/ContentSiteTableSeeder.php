<?php

use App\Model\ContentSite;
use Illuminate\Database\Seeder;

class ContentSiteTableSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  ContentSite::create([
   'session'     => 'services',
   'id_services' => 1,
   'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
   'img'         => 'funeraria.jpg',
  ]);
  ContentSite::create([
   'session'     => 'services',
   'id_services' => 2,
   'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
   'img'         => 'planofunerario.jpg',
  ]);
  ContentSite::create([
   'session'     => 'services',
   'id_services' => 3,
   'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
   'img'         => 'cemitery.jpg',
  ]);
  ContentSite::create([
   'session'     => 'services',
   'id_services' => 4,
   'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',
   'img'         => 'cremetorio.jpg',
  ]);
 }
}