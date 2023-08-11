<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index', ['students' => $students]);

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
        try {
            $newStudent = Student::create($data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return redirect(route('student.index'));

    }

    //Student update controller to view
    public function edit(Student $student){
       // dd($student);
        return view('student.click_edit', ['student' => $student]);


    }

    //Update data
    //public function update(Student $student, Request $request){
     //   $data = $request ->validate([
     //       'name' => 'required',
     //       'age' => 'required|numeric',
     //       'address' => 'required',
     //   ]);
      //  $student->update($data);
      //  return redirect(route('student.index'))->with('success', 'Student Update Successfully');

   // }
   public function update(Student $student, Request $request){
    try {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
        ]);

        $student->update($data);

        return redirect(route('student.index'))->with('success', 'Student updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred while updating the student.');
    }
}
public function delete(Student $student)
{
    $student->delete();
    return redirect()->back()->with('success', 'Student deleted successfully');
}


// MJ FRANK


}





