<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //This is not completely necessary, but do it anyways i guess
    
    //Table name
    protected $table='posts';
    //Primary Key
    public $primaryKey='id';
    //Timestamps
    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
