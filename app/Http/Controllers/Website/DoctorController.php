<?php

namespace App\Http\Controllers\Website;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DoctorCourses;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
public function index(){

  $users = User::leftJoin('doctors as do', 'do.user_id','=','users.id')->where('type','doctor')->select(['do.specialty as doc','users.name'])->get();


    return view('patient.doctor', ['users' => $users]);
}

public function getCour(){
    $course  =DoctorCourses::all();
    $doc = Doctor::all();
    return view('patient.course',compact('course','doc'));
}
}
