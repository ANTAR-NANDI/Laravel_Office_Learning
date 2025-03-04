<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // in case we dont use model_id as foreign key
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class,'user_foreign_id');
    // }
}
