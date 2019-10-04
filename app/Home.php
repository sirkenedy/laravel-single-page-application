<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public static function fetchSectionById($id){
        return  $todo = Home::where('id', $id)->first();
    }
}
