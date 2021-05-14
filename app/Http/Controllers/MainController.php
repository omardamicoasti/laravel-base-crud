<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;

class MainController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function shoes()
    {
        $shoes = Shoe::all();
        return view("shoes");
    }
}
