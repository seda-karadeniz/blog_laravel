<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CategoryPostRelationshipSeeder::class);
    }
}

//DB::table('users')->get();
////DB::table('posts')->get();
/// //DB::table('categories')->get();
/// DB::table('users')->where('slug','seda-karadeniz')->get();
/// DB::table('users')->where('email','seda.karadeniz@student.hepl.be')->get();
/// DB::table('categories')->where('slug','hobby')->get();
/// DB::table('categories')->join('posts', 'categories.id', '=', 'posts.category_id')->where('posts.category_id', '1')->get();
/// DB::table('posts')->select('posts.slug','posts.title','posts.excerpt','users.name')->join('users','posts.user_id','=','users.id')->get();
///

