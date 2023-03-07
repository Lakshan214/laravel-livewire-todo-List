<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
        protected $task;
      
    
    
        public function __construct()
        {
            $this-> task =new Todo();
           
        }


    public function view(){

       

        return view('welcome');

    }


    // public function save(Request $request)
    // {
    //     $this->task-> create($request->all());

    //     return redirect()->back();
    // }




}