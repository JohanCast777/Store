<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sale;

class ShopController extends Controller
{
    public function index(){
        $sales=Sale::all();
        return view('index',['sale'=>$sales]);
    }

    public function create(){
        return view('create');
    }
}
