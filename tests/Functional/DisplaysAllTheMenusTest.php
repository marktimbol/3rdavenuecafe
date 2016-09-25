<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DisplaysAllTheMenusTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_displays_all_the_menus_on_the_menus_page()
    {
    	$menu = factory(App\Menu::class)->create();

    	$this->visit('/menus')
    		->see($menu->name)
    		->see($menu->price)
    		->see($menu->description);
    }
}
