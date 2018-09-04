@extends('patient.new_patient')

@section('title','Edit Patient | MediCMS')


@section('patient_id','/'.$patient->id)
@section('first_name',$patient->firstname)
@section('last_name',$patient->lastname)
@section('gender',$patient->gender)
@section('gender',$patient->gender)
@section('birth_date',$patient->birth_date)
@section('email',$patient->email)
@section('mobile',$patient->mobile)

@section('edit_patient')
        {{method_field('PUT')}}
@endsection