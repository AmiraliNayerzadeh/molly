<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    protected $fillable = ['name' , 'phone' , 'email' , 'web' , 'category' , 'status'] ;
}
