<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use Illuminate\Support\Facades\Validator;

class PatientControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $patients=patient::orderby('id','desc')->get() ;



       return view('patient.patients',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.new_patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Validating the data
        $data = Validator::make($request->all(),[
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'gender'=>'required|max:6',
            'email'=>'required|max:255|email',
            'birthdate'=>'required|date|date_format:Y-m-d|before:tomorrow'
        ],[
            'firstname.required' => 'First name is required',
            'lastname.required' => 'Last name is required',
            'gender.required' => 'Gender is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email',
            'birthdate.required' => 'Please enter valid date of birth'
        ])->Validate();

        //Saving the date
        $obj = new Patient;
        $obj->firstname = $request->firstname;
        $obj->lastname = $request->lastname;
        $obj->gender = $request->gender;
        $obj->email = $request->email;
        $obj->birth_date = $request->birthdate;
        $obj->created_dt = date('y-m-d h:i:s');
        $is_saved = $obj->save();
        if($is_saved){
            session()->flash('patientmessage','Patient data is saved');
            return redirect('patient');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('patient.edit_patient');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         return view('patient.delete_patient');
    }
}
