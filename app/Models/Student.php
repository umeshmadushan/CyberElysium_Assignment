<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'image',
    ];

    public function images(){
        return $this->hasOne(Image::class,'id','image');
    }

}
