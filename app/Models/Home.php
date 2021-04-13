<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public static function index()
    {
        return Home::where('draft', false)
        // ->orderBy('id','desc')
        ->paginate(4);
    }
}
