<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\Reorder;

use App\Models\Student;
use App\Models\School;
use Mail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = Student::paginate(25);
      return view('admin.student.index' , compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $schools = School::all();
      return view('admin.student.create',compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'name' => 'required|max:100',
          'status' => 'required|max:100',
          'school_id' => 'required',
      ]);

      $student = new Student();
      $student->name = $request->name;
      $student->status = $request->status;
      $student->school_id = $request->school_id;
      $last = Student::select('order')->where('school_id',$request->school_id)->latest('id')->first();
      $student->order = ($last->order)+1;
      $student->save();
      return redirect()->route('mschool.index')->with('message', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $student = Student::with('school')->find($id);
      return view('admin.student.show' , compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = Student::find($id);
      return view('admin.student.edit' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
          'name' => 'required|max:100',
          'status' => 'required|max:100',
      ]);
      $student = Student::find($id);
      $student->name = $request->name;
      $student->status = $request->status;
      $student->save();
      return back()->with('message', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Student::find($id)->delete();
      event(new Reorder(auth()->user()));
      return redirect()->route('mstudent.index')->with('message', 'Success');
    }
}
