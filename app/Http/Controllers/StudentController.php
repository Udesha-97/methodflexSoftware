<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
      // return($students);
        return view('students.index',compact('students'));
        // return view('student.index');
        // return view('students.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
        // $students = Student::all();
        // return view('students.index',compact('students'));
    }

    /**
      * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // student ::create($request->all());

        $validator = Validator::make($request->all(),
        [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required|unique:students,address',
            'phone_no' => 'required|unique:students,phone_no',
            'dob' => 'required',

        ]
 

    );
    
    if ($validator->fails()) {
        return redirect('students/create')
                    ->withErrors($validator)
                    ->withInput();
    }
  
        Student ::create($request->all());
   
        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
       // return ($request);
       $validator = Validator::make($request->all(),
       [
        'first_name' => 'required',
        'last_name' => 'required',
        'address' => 'required',
        'phone_no' => 'required|unique:students,phone_no',
        'dob' => 'required',

    ]


   );
   if ($validator->fails()) {
       return redirect("students/$student->id/edit")
       // return redirect()->route('student.edit',$student)
                   ->withErrors($validator)
                   ->withInput();
   }
       $student->update($request->all());
       
                return redirect()->route('students.index')
                        ->with ('success','update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        
        $student->delete();
        return redirect()->route('students.index')
                        ->with ('success','deleted successfully.');
    }
    public function add(){
        return 'im add';
    }
}
