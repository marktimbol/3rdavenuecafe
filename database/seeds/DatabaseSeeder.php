<?php

use App\Category;
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
        // $categories = factory(App\Category::class, 10)->create();

        $categories = ['Appetizers', 'Beverages', 'Breakfast', 'Detox Water', 'Fresh Juice', 'Main Course', 'Pasta', 'Pizza', 'Salad', 'Sandwiches', 'Soups', 'Special Desserts', 'Hot Drinks', 'Mocktails', 'Shakes', 'Water and Softdrinks'];
        foreach( $categories as $category )
        { 
            Category::create([
                'name'  => $category
            ]);
        }

        $categories = Category::all();

        foreach( $categories as $category )
        {
            factory(App\Menu::class, 10)->create([
                'category_id'   => $category->id
            ]);
        }
    	
        // $this->call(UsersTableSeeder::class);
    }
}
