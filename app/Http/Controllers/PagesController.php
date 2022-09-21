<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
 {
    public function dashboard(){
        $data = [
            'name' => "Aryan",
            'age' => 17
        ];
        return view('dashboard')->with($data);
    }
    public function next(){
        return view('next');
    }
    public function create(){
        return view('create');
    }

    public function store(Request $REQUEST){
        $student = new student();
        $student->name=$REQUEST->name;
        $student->adress=$REQUEST->adress;
        $student->dob=$REQUEST->dob;
        $student->save();

    
    
    }
}