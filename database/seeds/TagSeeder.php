<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $tags = [
         'animals',
         'nature',
         'sport',
         'movies',
         'tv',
         'tech',
         'travel',
         'books',
         'eros',
         'love',
         'childs'
       ];

       foreach ($tags as $tag) {
         $newTag = new Tag();
         $newTag->content = $tag;
         $newTag->save();
       }
     }
   }
