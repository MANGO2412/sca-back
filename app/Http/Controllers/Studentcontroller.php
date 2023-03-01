<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Studentcontroller extends Controller
{
  public function index(Request $request){
    //$students=Student::all();
    $students=Student::with('general_data')->get();

    return([
        "data"=>$students
    ]);
  }
  public function show(Request $request){
      $student=Student::where('serial_number','=',$request['serial_number'])->get();
      return collect(
        [
          "status"=>1,
          "title"=>"show Student",
          "data"=>$student
        ]);
  }

  public function reqQuest(Request $request){

  }


  public function store(Request $request){
      $student=Student::create([
        "serial_number"=>$request['serial_number'],
        "mail"=>$request['mail'],
        "group_id"=>$request['group_id'],
        "general_data_id"=>$request['general_data_id']
      ]);
      
      return collect(
        [
          "status"=>1,
          "title"=>"create student",
          "data"=>$student
        ]);
      
  }


  public function destroy(Request $request){

  }


  public function update(Request $request){

  }

}
