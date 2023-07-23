<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class First extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'eng_name'  => 'required',
            'day'  => 'required',
            'fh_name'  => 'required',
            'birth'  => 'required',
            'blood_type'  => 'required',
            'no_street'  => 'required',
            'city'  => 'required',
            'district'  => 'required',
            'postal_code'  => 'required',
            'phone'  => 'required|digits:10|numeric',
            'wp_no'  => 'required|digits:10|numeric',
            'email'  => 'required|email',
            'adhar_no'  => 'required',
            'optradio'  => 'required',
        ]);
        // dd($request->all());
        
        $form = new Student();
        $form->name = $request->name;
        $form->eng_name = $request->eng_name;
        $form->day = $request->day;
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
        $form->yr = $request->yr;

        if ($request->cert_10) {
            $imageName = time(). $request->name . 'cert_10.' . request()->cert_10->getClientOriginalExtension();
            $request->cert_10->move(public_path('photos'), $imageName);
            $form->cert_10 = $imageName;
        }
        if ($request->certi_12) {

            $imageName2 = time(). $request->name . 'cert_12.' . request()->certi_12->getClientOriginalExtension();
            $request->certi_12->move(public_path('photos'), $imageName2);
            $form->certi_12 = $imageName2;
        }

        if ($request->voter) {
            $imageName3 = time(). $request->name . 'voter.' . request()->voter->getClientOriginalExtension();
            $request->voter->move(public_path('photos'), $imageName3);
            $form->voter = $imageName3;
        }


        if ($request->family_card) {
            $imageName4 = time(). $request->name . 'family_card.' . request()->family_card->getClientOriginalExtension();
            $request->family_card->move(public_path('photos'), $imageName4);
            $form->family_card = $imageName4;
        }


        if ($request->adhar_card) {
            $imageName5 = time(). $request->name . 'adhar_card.' . request()->adhar_card->getClientOriginalExtension();
            $request->adhar_card->move(public_path('photos'), $imageName5);
            $form->adhar_card = $imageName5;
        }

        if ($form->save()) {
            $data = Student::latest()->first();
            $count = Student::count();
            return view('preview', compact('data', 'count'));
        } else {
            return back()->with('error', 'Something went to wrong!.');
        }
    }
}
