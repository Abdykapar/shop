<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'books';
    protected $fillable = ['name','description','type'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
