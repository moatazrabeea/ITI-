<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='book';
    protected $fillable=['title','description','cover','book_link','publisher_id','category_id','status'];

    public function publisher(){
        return $this->hasOne('App\User','id','publisher_id');
    }

    public function category(){
        return $this->hasOne('App\Category','id',"category_id");
    }
}
