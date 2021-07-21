<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use Illuminate\Http\Request;

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
        return view('students.index',compact('students'))
     ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([$request, 
        'studname' => 'required',
        'course'=> 'required',
        'fee' => 'required',
        ],
    [
        'studname.required'=>'Bạn chưa nhập tên',
        'course.required'=>'Bạn chưa nhập course',
        'fee.required'=>'Bạn chưa nhập fee',
    ]
    );
       $studname = $request->input('studname');
       $course = $request ->input('course');
       $fee = $request ->input('fee');
       
       $student = new Student();
       $student->studname =$studname;
       $student->course =$course;
       $student->fee =$fee;
       $student->save();
       return redirect('/students')->with('success', 'Thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view ('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request ->validate([$request, 
        'studname' => 'required',
        'course'=> 'required',
        'fee' => 'required',
        ],
    [
        'studname.required'=>'Bạn chưa nhập tên',
        'course.required'=>'Bạn chưa nhập course',
        'fee.required'=>'Bạn chưa nhập fee',
    ]
    );
       $studname = $request->input('studname');
       $course = $request ->input('course');
       $fee = $request ->input('fee');
       $student = new Student();
       $student->studname =$studname;
       $student->course =$course;
       $student->fee =$fee;
       $student->save();
       return redirect('/students')->with('success', 'Thêm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student =Student::find($id);
        $student->delete();
        return redirect ('/students')->with('success','Bạn đã xóa thành công');
    }
}
