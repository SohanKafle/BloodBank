<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
  public function index(){
    $data=People::all();
    return view('peoples.index',compact('data'));
  }
  public function home(){
    return view('peoples.home');
  }
  public function create(){
    return view('peoples.create');
  }
  public function store(Request $request){
    $data=$request->validate([
      'name'=>'required',
      'phone'=>'required|numeric',
      'address'=>'required',
      'bloodgroup'=>'required',
      'age'=>'required|numeric',
      'photopath'=>'required',

    ]);
    $photoname = time().'.'.$request->photopath->extension();
    $request->photopath->move(public_path('images/people'), $photoname);
    $data['photopath'] = $photoname;
    People::create($data);
    return redirect()->route('peoples.home')->with('success','Blood Requested Successfully');
  }

}
