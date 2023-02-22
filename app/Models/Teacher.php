<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function class()
    {
        //kalau hasOne tak perlu foreign key $ local key
        return $this->hasOne(ClassRoom::class);
    }
}
