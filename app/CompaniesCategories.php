<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CompaniesCategories extends Model {


    protected $fillable = array('company_id', 'category_id');

    protected $table = 'companies_categories';

    public function companies() {
        return $this->belongsToMany('App\Company', 'company_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Categories', 'category_id');
    }



}
