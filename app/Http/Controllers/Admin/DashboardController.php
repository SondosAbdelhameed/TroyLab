<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\School;
use App\Models\Student;

class DashboardController extends Controller
{
    public function dashboard(){
      $schoolsNo = School::count();
      $studentsNo = Student::count();
      return view('admin.dashboard',compact('schoolsNo','studentsNo'));
    }
}
