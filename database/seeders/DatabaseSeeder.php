<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ModelCategory;
use App\Models\ModelPost;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();       

        ModelCategory::create([
        	'name' => 'Web Programming',
        	'Slug' => 'web-programming'
        ]);

        ModelCategory::create([
        	'name' => 'Personal',
        	'Slug' => 'personal'
        ]);

        ModelCategory::create([
            'name' => 'Web Design',
            'Slug' => 'web-design'
        ]);

        ModelPost::factory(20)->create();


         // manual
        // User::create([
        // 	'name' => 'Limit',
        // 	'email' => 'Limit@gmail.com',
        // 	'password' => bcrypt('12345')
        // ]);

        // User::create([
        // 	'name' => 'mikasa',
        // 	'email' => 'mikasa@gmail.com',
        // 	'password' => bcrypt('12345')
        // ]);

        // ModelPost::create([
        // 	'title' => 'Judul Pertama',
        // 	'slug' => 'judul-pertama',
        // 	'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Neque officiis sequi commodi autem quisquam, repellendus exercitationem harum nemo veritatis iure?',
        // 	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        // 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        // 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        // 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        // 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        // 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        // 	'category_id' => 1,
        // 	'user_id' => 1

        // ]);



        // ModelPost::create([
        // 	'title' => 'Judul Ke Dua',
        // 	'slug' => 'judul-ke-dua',
        // 	'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Neque officiis sequi commodi autem quisquam, repellendus exercitationem harum nemo veritatis iure?',
        // 	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        // 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        // 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        // 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        // 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        // 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        // 	'category_id' => 1,
        // 	'user_id' => 1

        // ]);


        // ModelPost::create([
        // 	'title' => 'Judul Ke Tiga',
        // 	'slug' => 'judul-ke-tiga',
        // 	'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Neque officiis sequi commodi autem quisquam, repellendus exercitationem harum nemo veritatis iure?',
        // 	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        // 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        // 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        // 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        // 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        // 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        // 	'category_id' => 2,
        // 	'user_id' => 1

        // ]);

        //   ModelPost::create([
        // 	'title' => 'Judul Ke Empat',
        // 	'slug' => 'judul-ke-empat',
        // 	'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Neque officiis sequi commodi autem quisquam, repellendus exercitationem harum nemo veritatis iure?',
        // 	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        // 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        // 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        // 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        // 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        // 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        // 	'category_id' => 2,
        // 	'user_id' => 2

        // ]);




    }
}
