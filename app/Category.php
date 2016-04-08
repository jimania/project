<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {


    protected $fillable = array('name', 'industry');

    protected $table = 'categories';

    public function companies() {
        return $this->belongsToMany('App\Company', 'companies_products', 'category_id', 'company_id');
    }



}
