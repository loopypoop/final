<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	
	public function showProduct($id){
		$product = new Product;
		return view('admin.one-product', [
			'data' => $product->find($id)
		]);
	}
	public function addProduct(){
		
		return view('admin.add-product');

	}

	public function addProductSubmit(ProductRequest $req){
		$product = new Product;
		$product->title = $req->input('title');
		$product->price = $req->input('price');
		$product->description = $req->input('description');
		$product->category = $req->input('category');

		$product->save();
		return redirect()->route('test')->with('success','Message was updated');
	}

	public function updateProduct($id){
		$product = new Product;
		return view('admin.update-product', [
			'data' => $product->find($id)
		]);
	}
	public function ImageProduct($id){
		$product = new Product;
		return view('admin.add-product-image', [
			'data' => $product->find($id)
		]);
	}

	public function store(Request $req){
		if($req->hasFile('img')){

			$filename = $req->img->getClientOriginalName();
			$fileid = $req->product_id;
			$req->img->move('images', $filename);
			
			$image = new ProductImage;

			$image->img = $filename;
			$image->product_id = $fileid;

			$image->save();

			return redirect()->route('test');
		}
	}


	public function updateProductSubmit($id, ProductRequest $req) {

		$product = Product::find($id);
		$product->title = $req->input('title');
		$product->price = $req->input('price');
		$product->description = $req->input('description');
		$product->category = $req->input('category');

		$product->save();

		return redirect()->route('product-form', $id)->with('success','Message was updated');
	}
	public function deleteProduct($id) {
		Product::find($id)->delete();
		return redirect()->route('test');
	}
}
