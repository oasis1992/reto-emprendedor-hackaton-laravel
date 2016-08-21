<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChartsController extends Controller
{
    public function charts(){
        return View('charts.chart');
    }
}
