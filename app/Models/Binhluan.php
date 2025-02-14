<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    use HasFactory;
    public function commentTintuc(){
        return $this->hasOne(Tintuc::class,'id', 'id_tintuc');
    }

    public function commentUser(){
        return $this->hasOne(User::class,'id', 'id_user');
    }
}
