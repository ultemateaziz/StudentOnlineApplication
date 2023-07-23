<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class Teacher extends Controller
{
    public function index()
    {
        $count = Student::where('yr','!=','')->count();
        $count1 = Student::where('yr','first')->count();
        $count2 = Student::where('yr','second')->count();
        $count3 = Student::where('yr','third')->count();
        $count4 = Student::where('yr','four')->count();
        $count5 = Student::where('yr','five')->count();
    return view('teacher.dashboard',compact('count','count1','count2','count3','count4','count5'));
    }


    public function show($id){
        $data = Student::findOrFail($id);
        return view('edit-user',compact('data'));
    }

    public function edit(Request $request,$id)
    {
        // dd($request->all());
        $request->validate([
            'name'  => 'required',
            'eng_name'  => 'required',
            'fh_name'  => 'required',
            'birth'  => 'required',
            'blood_type'  => 'required',
            'no_street'  => 'required',
            'city'  => 'required',
            'district'  => 'required',
            'postal_code'  => 'required',
            'phone'  => 'required|numeric|digits:10',
            'wp_no'  => 'required|numeric|digits:10',
            'email'  => 'required|email',
            'adhar_no'  => 'required',  
            'optradio'  => 'required',
        ]);
        $form = Student::findOrFail($id);
            $form->name = $request->name;
            $form->eng_name = $request->eng_name;
            $form->fh_name = $request->fh_name;
            $form->birth = $request->birth;
            $form->blood_type = $request->blood_type;
            $form->no_street = $request->no_street;
            $form->city = $request->city;
            $form->district = $request->district;
            $form->postal_code = $request->postal_code;
            $form->phone = $request->phone;
            $form->wp_no = $request->wp_no;
            $form->email = $request->email;
            $form->adhar_no = $request->adhar_no;
            $form->optradio = $request->optradio;

        if ($form->save()) {
            return back()->with('message', 'Student has been updated sucessfully!.');
        } else {
            return back()->with('error', 'Something went to wrong!.');
        }
    }
}
