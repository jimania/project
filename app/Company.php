<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Company extends Model {


    protected $fillable = array('name', 'address', 'phone');


    public function admin() {
        return $this->hasOne('App\Admin'); // this matches the Eloquent model
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function categories() {
        return $this->belongsToMany('App\Category', 'companies_categories', 'company_id', 'category_id');
    }



}
