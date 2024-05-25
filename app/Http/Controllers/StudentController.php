<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;
    public function create(){
        return view('front.student.create');
    }
    public function index(){
        $this->students = Student::all();
        return view('front.student.index',[
            'students' => $this->students,
            ]);
    }
    public function store(Request $request){
        Student::createStudent($request);
        return back()->with('success', 'Student Created Successfully.');
    }
}
