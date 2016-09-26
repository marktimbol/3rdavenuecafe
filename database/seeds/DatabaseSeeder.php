<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(App\Category::class, 10)->create();

        foreach( $categories as $category )
        {
            factory(App\Menu::class, 10)->create([
                'category_id'   => $category->id
            ]);
        }
    	
        // $this->call(UsersTableSeeder::class);
    }
}
