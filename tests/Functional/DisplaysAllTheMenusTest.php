<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DisplaysAllTheMenusTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_displays_all_the_menus_on_the_menus_page()
    {
        $category = factory(App\Category::class)->create();
    	$menus = factory(App\Menu::class, 3)->create([
            'category_id'   => $category->id
        ]);

    	$this->visit('/menus');
        foreach( $menus as $menu )
        {
            $this->see($menu->name)
        		->see($menu->price)
        		->see($menu->description);
        }
    }

    public function test_it_displays_the_menus_of_the_selected_category()
    {
    	$category = factory(App\Category::class)->create();
    	$menu = factory(App\Menu::class)->create([
    		'category_id'	=> $category->id
    	]);
    	$menu2 = factory(App\Menu::class)->create([
    		'category_id'	=> 0
    	]);

    	$this->visit('/categories/'.$category->id)
    		->see($menu->name)
    		->dontSee($menu2->name);
    }

    public function test_it_displays_a_single_menu()
    {
        $category = factory(App\Category::class)->create();
        $menu = factory(App\Menu::class)->create([
            'category_id'   => $category->id
        ]);

        $this->visit('/menus/'.$menu->id)
            ->see($menu->name)
            ->see($menu->price)
            ->see($menu->description);  
    }
}
