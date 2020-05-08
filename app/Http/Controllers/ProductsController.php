<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;
use Session;
use App\Cart;
use App\Order;
use App\Category;
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
       $products->category_id=$request->get('category_id');
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
         

         public function getAddToCart(Request $request,$id){
            $product=Product::find($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($product, $product->id);
            $request ->session()->put('cart', $cart);
            return redirect()->route('search');
           }
          

          public function reduceByOne($id){
            $product=Product::find($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->reduceByOne($id);
            Session::put('cart', $cart);
            return redirect()->route('product.shoppingCart');
           }
           

            public function incrementByOne($id){
            $product=Product::find($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->incrementByOne($id);
            Session::put('cart', $cart);
            return redirect()->route('product.shoppingCart');
           }

           public function removeItem($id){
             $product=Product::find($id);
             $oldCart = Session::has('cart') ? Session::get('cart') : null;
             $cart = new Cart($oldCart);
             $cart->removeItem($id);
             Session::put('cart', $cart);
             return redirect()->route('product.shoppingCart');
           }

   		/*public function addToCart($id){
            $user = Auth::user();
            $product=Product::find($id);
            $user->products()->attach($product);
            return view('product.sucsses')->with('info','added Sucssesfuly');
         } */
       /*  public function cart(){
   
            $user=Auth::user();
            return view('user.cart',['user'=>$user]);
         }*/
             
        /*      public function checkout(){
   
          
                  return view('user.checkout');
         }*/
         public function getCart(){
            if(!Session::has('cart')){
               return view('product.shoping-cart',['products'=>null]);
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('product.shoping-cart', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);
            }
        
         public function getCheckout(){
             if(!Session::has('cart')){
               return view('product.shoping-cart');
            }
             $oldCart = Session::get('cart');
             $cart = new Cart($oldCart);
             $total=$cart->totalPrice;
             return view('product.checkout',['total'=>$total]);
         }
        
         public function postCheckout(Request $request){
            $user = Auth::user();
            if(!Session::has('cart')){
               return view('product.shoping-cart');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $order = new Order;
            $order->cart =serialize($cart);
            $order->address =  $request->input('address');
            $order->name =  $request->input('name');
            $user->orders()->save($order);
            Session::forget('cart');
            return view('product.shoping-cart');
         }
       
            public function getProfile(){
               $orders= Auth::user()->orders;
               $orders->transform(function($order, $key){
                  $order->cart = unserialize($order->cart);
                  return $order;
               });
               return view('user.profile',['orders' => $orders]);
            }
            

            public function getOrders(){
               $users = User::all();
               foreach ($users as $user) {
                  $orders= $user->orders; 
                  $orders->transform(function($order, $key){
                  $order->cart = unserialize($order->cart);
                  return $order;
               });
               }
               return view('admin.orders',['users'=>$users, 'orders'=>$orders]);
            }
           

           public function orderDelivered($id){
             $order=Order::find($id);
             $order->delete();
             return redirect()->route('admin.orders')->with('Delivered','The order closed');
            }
 
            public function getByCategory($id){
              $category= Category::find($id);
              $products = Product::select('*')->where('category_id',$id)->get();
              return view('product.bycategory',['products'=>$products, 'category' => $category]);
            }

}