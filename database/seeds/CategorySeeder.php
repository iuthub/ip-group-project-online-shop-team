<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$category = new \App\Category([
            'name' => 'Iphone',

        ]);

        $category->save();
        $category = new \App\Category([
            'name' => 'Ipad',

        ]);
        $category->save();
        $category = new \App\Category([
            'name' => 'IMac',

        ]);
        $category->save();
        $category = new \App\Category([
            'name' => 'Macbook Pro',

        ]);
         $category->save();
        $category = new \App\Category([
            'name' => 'Macbook Air',

        ]);
        $category->save();
        $category = new \App\Category([
            'name' => 'IWatch',

        ]);
        $category->save();
        $category = new \App\Category([
            'name' => 'AirPods',

        ]);
        $category->save();
        
    }
}
