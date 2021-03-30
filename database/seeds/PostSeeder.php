<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorInfo;
use App\Post;
use App\Comment;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($a=0; $a < 50 ; $a++) {
        $author = new Author();
        $author->username = $faker->name();
        $author->save();

        $authorInfo = new AuthorInfo();
        $authorInfo->name = $faker->firstName();
        $authorInfo->surname = $faker->lastName();
        $authorInfo->email = $faker->email();
        $authorInfo->avatar = 'https://picsum.photos/seed/'.rand(1,1000).'/200/300' ;
        $author->author_info()->save($authorInfo);

        for ($p=0; $p < rand(1,10) ; $p++) {
          $post = new Post();
          $post->title = $faker->text(45);
          $post->content = $faker->text(255);
          $author->posts()->save($post);

          for ($c=0; $c < rand(1,25) ; $c++) {
            $comment = new Comment();
            $comment->username = $faker->name();
            $comment->content = $faker->text(150);
            $post->comments()->save($comment);

          }
        }
      }
    }
}
