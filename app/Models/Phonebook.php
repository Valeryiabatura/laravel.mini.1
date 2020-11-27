<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{

    public function contacts(){
        return $this->belongsTo('App\Models\Contact',  'id','book_id');
    }


}
