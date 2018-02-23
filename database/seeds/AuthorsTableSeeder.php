<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Blog;
use App\Category;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	factory(Author::class, 4)->create()->each(function ($author) {
		    //create 3 posts for each user
		    factory(Blog::class, 2)->create(['author_id'=>$author->id]);
		});

    	DB::table('categories')->insert([
            'name' => 'PHP'
        ]);

        DB::table('categories')->insert([
            'name' => 'JavaScript'
        ]);

        DB::table('categories')->insert([
            'name' => 'Laravel'
        ]);

    	DB::table('blog_category')->insert([
            'blog_id' => '1',
            'category_id' => '1'
        ]);

        DB::table('blog_category')->insert([
            'blog_id' => '2',
            'category_id' => '2'
        ]);
        DB::table('blog_category')->insert([
            'blog_id' => '2',
            'category_id' => '3'
        ]);
        DB::table('blog_category')->insert([
            'blog_id' => '3',
            'category_id' => '1'
        ]);
        DB::table('blog_category')->insert([
            'blog_id' => '4',
            'category_id' => '2'
        ]);
        DB::table('blog_category')->insert([
            'blog_id' => '5',
            'category_id' => '2'
        ]);
        DB::table('blog_category')->insert([
            'blog_id' => '6',
            'category_id' => '3'
        ]);
        DB::table('blog_category')->insert([
            'blog_id' => '7',
            'category_id' => '1'
        ]);
        DB::table('blog_category')->insert([
            'blog_id' => '8',
            'category_id' => '2'
        ]);
       
	}
}
