<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name','gender','nis','class_id'
    // ];
    
    //MANY TO ONE
    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    

}
