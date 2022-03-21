<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use App\Events\Reorder;

use App\Models\Student;
use App\Models\School;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $school = School::where('user_id',auth()->user()->id)->first();
      $data['students'] = Student::where('school_id',$school->id)->paginate(25);
      return toJson(code_success(),msg_success(),$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $valid = Validator::make($request->all(),[
          'name' => 'required|max:100',
          'status' => 'required|max:100',
      ]);

      if($valid->fails()){
          $error = $valid->errors();
          return toJson(code_data_error(),msg_data_error(),$error);
      }else{
        $student = new Student();
        $student->name = $request->name;
        $student->status = $request->status;
        $school = School::where('user_id',auth()->user()->id)->first();
        $student->school_id = $school->id;
        $last = Student::select('order')->where('school_id',$school->id)->latest('id')->first();
        $student->order = ($last->order)+1;
        $student->save();
        return toJson(code_success(),msg_success(),null);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $school = School::where('user_id',auth()->user()->id)->first();
      $data['student'] = Student::where('school_id',$school->id)->findorFail($id);
      return toJson(code_success(),msg_success(),$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
      $valid = Validator::make($request->all(),[
          'name' => 'required|max:100',
          'status' => 'required|max:100',
      ]);
      if($valid->fails()){
          $error = $valid->errors();
          return toJson(code_data_error(),msg_data_error(),$error);
      }else{
        $student = Student::findorFail($id);
        $student->name = $request->name;
        $student->status = $request->status;
        $student->save();
        return toJson(code_success(),msg_success(),null);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Student::findorFail($id)->delete();
      event(new Reorder(auth()->user()));
      return toJson(code_success(),msg_success(),null);
    }
}
