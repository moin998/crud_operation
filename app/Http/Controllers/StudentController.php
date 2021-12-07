<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students= student::all();
        return view('welcome',['students'=>$students]);
    }

    public function create(){
        return view('create');
    }


    public function store(){
        $attributes= \request()->validate([
            'name'=>'required',
            'email'=>'email|unique:students',
            'phone_no'=>'required',
            'class'=>'required',
            'group'=>'required'
        ]);


        Student::create($attributes);
        return redirect('/');
    }


    public function edit($id){

      $student= student::find($id);
        return view('edit',['student'=>$student]);
    }


    public function update($id){
        $attribute= \request()->validate([
            'name'=>'required|max:32',
            'email'=>"required|email|unique:students,email,$id",
            'phone_no'=>'required',
            'class'=>'required',
            'group'=>'required'
        ]);
      Student::find($id)->update(
            $attribute
        );

      return redirect('/');
    }


    public function destroy($id){
        Student::find($id)->delete();
        return redirect('/');
    }


}
