<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class MainController extends Controller
{
    public function index(){
        $allTrain = Train::all();
        // dd($allTrain);
        return view('train.index', ['allTrain' => $allTrain]);
    }
}
