<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendacesController extends Controller
{
    public function sample(Request $request){
  $date = $request->input('date');

  return view('/sample',[
    'date' => $date,
  ]);
}
}
