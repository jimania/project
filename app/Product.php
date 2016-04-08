<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {


    protected $fillable = array('name', 'price' ,'company_id');
    protected $table = 'products';

    public function company() {
        return $this->belongsTo('App\Company');
    }


}
