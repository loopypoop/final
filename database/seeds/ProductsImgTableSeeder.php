<?php

use Illuminate\Database\Seeder;

class ProductsImgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for($i = 1; $i < 17; $i++)
		\Illuminate\Support\Facades\DB::table('product_images')->insert([
			'img' => 'product-'.$i.'.jpg',
			'product_id' => $i
	  ]);
    }
}
