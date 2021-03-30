<?php

use Illuminate\Database\Seeder;

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
        $tag = new Tag();
        $tag->content = $tag;
        $tag->save();
      }
}
