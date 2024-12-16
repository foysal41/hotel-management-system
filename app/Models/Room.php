<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'image', 'qty', 'hotel_id', 'status'];


    public function hotel(){
        return $this->belongsTo(Hotel::class , 'hotel_id');
    }

    use HasFactory;
}
