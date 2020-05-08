<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	protected $fillable=['name','description','price','image','category_id'];

	public function users(){
    	return $this->belongsToMany('App\User')->withTimestamps();//
     
     	 }

    public function category(){
    	return $this->belongsTo('App\Category');
    }
    //
}
