<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $patients = patient::limit(5)->orderby('id','desc')->get() ;
        return view('home',compact('patients'));

        //return view('home');    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){   
        $patients = patient::orderby('id','desc')->get() ;
        return view('patient.edit_patient',compact('patient'));
        //return view('patient.edit_patient');
       //return 'This is edit method';
    }


     public function patient(){
        return view('patient.patients');
    }
}
