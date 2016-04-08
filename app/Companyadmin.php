<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class companyAdmin extends Model {


    protected $fillable = array('name', 'company_id');
    protected $table = 'companyadmin';

    public function company() {
        return $this->belongsTo('Company');
    }


}
