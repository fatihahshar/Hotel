<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomname',
        'roomdescription',
        'roomquantity',
        'price',
    ];

    public function getPictUrlAttribute(){
        return asset('storage/pict/'.$this->pict);
    }
}
