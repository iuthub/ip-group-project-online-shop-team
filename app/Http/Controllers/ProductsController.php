<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image;
class ProductsController extends Controller
{
   public function index(){

   		$products = Product::all();
   		return view('admin.index',['products'=>$products]);
   }
  
   public function create(){

   	 	return view('admin.create');
   }
 
   public function createProduct(Request $request){
   	 $products = new Product();
   	 $products->name = $request->input('name');
   	 $products->price= $request->input('price');
   	 if ($request->hasFile('image')){
   	 $file=$request->file('image');
   	 $extension = $file->getClientOriginalName();
   	 $filename= time() . '.' . $extension;
   	 $file->move('public/image/', $filename);
   	 $products->image= $filename;
   	}
   	else{
   		return $request;
   		$products->image='';
   	}

   	 $products->description = $request->input('description');
   	 $products->save();
   	 	return view('admin.create')->with('products',$products);
    }	
	
   
	public function edit($id){

		$product = Product::find($id);	
		return view('admin.edit',['product'=>$product, 'productId'=> $id]);

	 } 
	public function edited(Request $request){
		 $product = Product::find($request->input('id'));
		 $product->name = $request->input('name');
   		 $product->price= $request->input('price');
   		 if ($request->hasFile('image')){
   		 $file=$request->file('image');
   		 $extension = $file->getClientOriginalName();
   		 $filename= time() . '.' . $extension;
   		 $file->move('public/image/', $filename);
   		 $product->image= $filename;
   		}
   		else{
   			return $request;
   		$product->image='';
   		}

   		 $product->description = $request->input('description');
   	 	 $product->save();
   		 return redirect()->route('admin.index')->with('info','Added Sucssesfuly');
   		}
   	public function delete($id){
   		  $product = Product::find($id);
   		  $product->delete();
           return redirect()->route('admin.index')->with('info', 'Deleted');

   		}
	 
}
