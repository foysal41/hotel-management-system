<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $primaryKey = 'id';
    protected $fillable= ['name' , 'image' , 'description' , 'status'];

    use HasFactory;
}
