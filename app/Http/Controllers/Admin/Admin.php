<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use PhpParser\Node\Expr\FuncCall;

class Admin extends Controller
{
    public function index()
    {
        $count = Student::where('yr','!=','')->count();
        $count1 = Student::where('yr','first')->count();
        $count2 = Student::where('yr','second')->count();
        $count3 = Student::where('yr','third')->count();
        $count4 = Student::where('yr','four')->count();
        $count5 = Student::where('yr','five')->count();
    return view('admin.dashboard',compact('count','count1','count2','count3','count4','count5'));
    }

    public function changeStatus(Request $request,$id){
            $student = Student::findOrFail($id);
            if($request->book_status == null && $request->application_status == null){
                return false;
            }
            $student->book_status = $request->book_status;
            $student->application_status = $request->application_status;
            if ($student->save()) {
                return back()->with('message', 'Status has been updated sucessfully!.');
            } else {
                return back()->with('error', 'Something went to wrong!.');
            }
    }

    public function show($id){
        $data = Student::findOrFail($id);
        return view('update-user',compact('data'));
    } 
    public function showTeacher($id){
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

    public function first(){
        $datas = Student::where('yr','first')->orderBy('eng_name')->paginate(10);
        return view('first-student',compact('datas'));
    }
    public function second(){
        $datas = Student::where('yr','second')->orderBy('eng_name')->paginate(10);
        return view('second-student',compact('datas'));
    }
    public function third(){
        $datas = Student::where('yr','third')->orderBy('eng_name')->paginate(10);
        return view('third-student',compact('datas'));
    }
    public function four(){
        $datas = Student::where('yr','four')->orderBy('eng_name')->paginate(10);
        return view('four-student',compact('datas'));
    }
    public function five(){
        $datas = Student::where('yr','five')->orderBy('eng_name')->paginate(10);
        return view('five-student',compact('datas'));
    }

    public function viewDocument($id){
        $data = Student::findOrFail($id);
        return view('view-document',compact('data'));
    }
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        if ($student->delete()) {
            return back()->with('message', 'Student has been deleted sucessfully!.');
        } else {
            return back()->with('error', 'Something went to wrong!.');
        }
    }
}
;