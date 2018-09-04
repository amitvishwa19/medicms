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
    public function index(){
       $patients = patient::orderby('id','desc')->get() ;
       return view('patient.patients',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('patient.new_patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){   
        //Validating the data
        $data = Validator::make($request->all(),[
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'email'=>'required|max:255|email'
        ],[
            'firstname.required' => 'First name is required',
            'lastname.required' => 'Last name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email'
        ])->Validate();

        //Saving the date
        $obj = new Patient;
        $obj->firstname = $request->firstname;
        $obj->lastname = $request->lastname;
        $obj->gender = $request->gender;
        $obj->email = $request->email; 
        $obj->created_dt = date('y-m-d h:i:s');
        $is_saved = $obj->save();
        if($is_saved){
            session()->flash('patientmessage','Patient data is saved');
            return redirect('patient');
        }else{
            session()->flash('patientmessage','Data Not Saved');
            return redirect('patient.new_patient');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){   
        $patient = Patient::find($id);
        return view('patient.edit_patient',compact('patient'));
        //return view('patient.edit_patient');
       //return 'This is edit method';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
         //Validating the data
         $data = Validator::make($request->all(),[
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',           
            'email'=>'required|max:255|email',
            'birthdate'=>'required|date|date_format:Y-m-d|before:tomorrow'
        ],[
            'firstname.required' => 'First name is required',
            'lastname.required' => 'Last name is required',         
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email',
            'birthdate.required' => 'Please enter valid date of birth'
        ])->Validate();

       $patient=Patient::find($id);     
       $patient->firstname = $request->firstname;
       $patient->lastname = $request->lastname;
       $patient->gender = $request->gender;
       $patient->email = $request->email;
       $patient->birth_date = $request->birthdate;     
       $is_saved = $patient->save();
       if($is_saved){
            session()->flash('patientmessage','Patient data Updated Successfully');
            return redirect('patient/'.$id.'/edit');
        }{
            session()->flash('patientmessage','Data Not Saved');
            return redirect('patient/'.$id.'/edit');
        }     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $patient = patient::find($id);
        $is_deleted=$patient->delete();
        if($is_deleted){
            session()->flash('patientmessage','Patient deleted successfully');
            return redirect('patient');
        }
    }
}
