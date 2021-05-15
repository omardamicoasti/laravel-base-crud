<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Shoe;

class MainController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function shoes()
    {
        $shoes = Shoe::all();
        return view("shoes", compact("shoes"));
    }
}
