<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table= 'articles';


    public static function trending($take = 3){
        // the take here is used to take only the top popular 3 posts
        return Article::orderBy('reads', 'desc')->take($take)->get();
    }

}
