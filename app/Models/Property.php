<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'bedroom',
        'bathroom',
        'size',
        'price',
        'cover',
    ];

    public function images(){
        return $this->belongsTo(Image::class);
    }
}
