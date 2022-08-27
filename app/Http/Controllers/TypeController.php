<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Property;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
