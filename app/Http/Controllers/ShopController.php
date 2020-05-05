<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
	public function shop(){
		$products = Product::all();

		return view('CartShop.shop',[
			'products' => $products
		]);
	}
	public function showOneProduct($id) {
		$product = new Product;
		return view('CartShop.shop-one-product', [
			'data' => $product->find($id)
		]);
	}
}
