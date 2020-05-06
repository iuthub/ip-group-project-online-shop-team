<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
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
         public function search(Request $request){
            $q = $request->input('q');
          
            if($q!=""){
            $products= Product::where('name','LIKE','%'.$q.'%')->get();
            if(count($products)>0)
             return view('product.search')->withDetails($products)->withQuery($q); 
            }  
             return view ('product.search')->withMessage('No Details found. Try to search again !');
             
         }
         public function searchPage(){
           
            return view('product.search');
         }
       
         public function single($id){
            
            $product=Product::find($id);
            return view('product.single',['product'=>$product]);
         }
   		public function addToCart($id){
            $user = Auth::user();
            $product=Product::find($id);
            $user->products()->attach($product);
            return view('product.sucsses')->with('info','added Sucssesfuly');
         } 
         public function cart(){
   
            $user=Auth::user();
            return view('user.cart',['user'=>$user]);
         }
             
              public function checkout(){
   
          
                  return view('user.checkout');
         }
        }