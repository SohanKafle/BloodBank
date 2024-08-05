<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\User;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
  public function index(){
    $data=People::all();
   
    // return view('donors.show',compact('donors'));
    // $data=People::all();

    return view('peoples.index',compact('data'));
  }
  public function home($pid){
    $people=People::find($pid);
      $donors =User::where('address',$people->address)->where('bloodgroup',$people->bloodgroup)->get();
    // dd($donors);
    return view('peoples.home',compact('donors'));
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
    $people = People::create($data);
    return redirect()->route('peoples.home',$people->id)->with('success','Blood Requested Successfully');
  }
  
  // public function show(){
  //   $donors=User::all();
  //   return view('peoples.show',compact('donors'));
  // }

}
