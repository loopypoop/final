<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for($i = 1; $i < 17; $i++)
		\Illuminate\Support\Facades\DB::table('products')->insert([
			'title' => 'Product '.$i,
			'price' => rand(1.5, 500),
			'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
			'category' => 'man'
	  ]);
    }
}
