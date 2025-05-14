<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_list(){
        $students = Student::select('id','student_id','name','phone_number','location')->get();
        return view('pages.students.list',compact('students'));
    }
    public function createStudent(){
        return view('pages.students.create');
    }

    public function store(Request $request){
        $val = Validator::make($request->all(),[
            'name' => 'required',
            'phone_number' => 'required',
            'location' => 'required',
        ]);
        if($val->fails()){
            return ('validation fail');
        }
        Student::create([
            'student_id' => $request->input('student_id'),
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'location' => $request->input('location'),
        ]);
        return redirect()->route('student.list');
    }

    public function editStudent($id){
        $student = Student::find($id);

        return view('pages.students.edit',compact('student'));
    }

    public function update(Request $request,$id){
        $student = Student::find($id);
        $student->update([
            'student_id' => $request->input('student_id'),
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'location' => $request->input('location'),
        ]);
        return redirect()->route('student.list');
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.list');
    }
}
