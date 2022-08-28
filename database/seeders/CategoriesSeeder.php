<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $categories = [];

      $cName = 'Без категории';
      $categories[] = [
         'title'     => $cName,
         'slug'      => Str::slug($cName)
      ];

      for ($i = 2; $i <= 11; $i++) {
         $cName = 'Категория #' . $i;
         $categories[] = [
            'title'     => $cName,
            'slug'      => Str::slug($cName)
         ];
      }

      DB::table('categories')->insert($categories);
   }
}
