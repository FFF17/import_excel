<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Output;

class OutputController extends Controller
{
    
		public function index()
		  {
$data['output'] = \App\Output::paginate(10); 

        return view('print/index')->with($data);

    }


    }
