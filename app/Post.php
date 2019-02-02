<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
 #endregion
        'title','content','category_id','featured'

    ];
    
    public function category(){
        
 
        return $this->belongsTo('App\Category');

    }


}