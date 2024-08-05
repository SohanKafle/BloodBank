<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index(){
        
      $data=User::all();
      $data=$data->map(function($d){
       echo $d->role=='user';
        
      });
      
     return view('donors.index',compact('data'));
    }
}
