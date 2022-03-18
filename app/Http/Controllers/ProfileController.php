<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProfileController extends Controller
{
    public function profile()
    {
        $data = Product::all();
        $data = Product::paginate(2);
        return view ('profile',['daftar' => $data])
        ->with('title','Product');
    }
    
}
