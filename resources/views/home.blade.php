@extends('layouts.app')

@section('content')

<?php //print_r($patients) ?>

<div class="content-wrapper container">
 

    <div class="row">
        
        <!--Reports-->
        <div class="col-md-6">
            @include('patient.snippet.report')
        </div>
        <!--Reports-->
        
        <!--Desease symptom-->
        <div class="col-md-6">
            @include('patient.snippet.symptom')
        </div>
        <!--Desease symptom-->

    </div><!--Row--> 

    <div class="row">
    
        <!--Patient-->
        <div class="col-md-6">           
            @include('patient.snippet.patient')
        </div><!--Patient-->

        <!--Appointments-->
        <div class="col-md-6">
            @include('patient.snippet.appointment')
        </div><!--Appointments-->

    </div><!--Row-->

</div>
        
      
        
@endsection
