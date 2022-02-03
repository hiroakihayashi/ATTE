<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{ 
public function index()
    {
        $items = Test::simplePaginate(4);
        return view('index', ['items' => $items]);
    }
}
