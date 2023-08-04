<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){

        return view('student.index');
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request){
        $data = $request ->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
        ]);
        $newStudent = Student::create($data);
        return redirect(route('student.index'));

    }

    public function t(){}
}

