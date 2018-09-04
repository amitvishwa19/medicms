@extends('layouts.app')

@section('content')

<?php print_r($patients) ?>

<div class="content-wrapper container">
 

    <div class="row">
        
        <!--Reports-->
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a href="#reports" style="color:#fff;" data-toggle="collapse"><strong>Reports</strong></a>
                    <a href="" style="color:#fff;" Class="pull-right glyphicon glyphicon-plus"></a>
                </div>

                <div id="reports" class="panel-collapse collapse">
                    <div class="panel-body">

                        Report of every patient

                    </div>
                </div>    
            </div>
        </div>
        <!--Reports-->
        
        <!--Desease symptom-->
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a href="#disease" style="color:#fff;" data-toggle="collapse"><strong>Disease Symptoms</strong></a>
                    <a href="" style="color:#fff;" Class="pull-right glyphicon glyphicon-plus"></a>
                </div>

                <div id="disease" class="panel-collapse collapse">
                    <div class="panel-body">

                        Disease symptom

                    </div>
                </div>    
            </div>
        </div>
        <!--Desease symptom-->

    </div><!--Row--> 

    <div class="row">
    
        <!--Patient-->
        <div class="col-md-6">           
            <div class="panel panel-primary">

                <div class="panel-heading">
                        <a href="{{URL::to('/patient')}}" style="color:#fff;"><span>Patient</span></a>
                        <a href="{{url('patient/create')}}" style="color:#fff;" Class="pull-right glyphicon glyphicon-plus"></a>
                </div>

                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                                                
                        @foreach($patients as $patient)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                        <a data-toggle="collapse" data-parent="#accordion" href="#{{$patient-> id}}">
                                            {{$patient-> firstname}},{{$patient-> lastname}}
                                        </a>
                                        <a href="{{url('patient/' .$patient->id. '/edit')}}"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a>
                                    
                                </div>
                                <div id="{{$patient-> id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                                
                                    </div>
                                </div>
                            </div>
                        
                        @endforeach
                        
                    </div>                       

                </div>
            </div>
        </div><!--Patient-->

        <!--Appointments-->
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a href="" style="color:#fff;"><strong>Appointments</strong></a>
                    <a href="" style="color:#fff;" Class="pull-right glyphicon glyphicon-plus"></a>
                </div>
                <div class="panel-body">
                    Schedule content
                </div>
            </div>
        </div><!--Appointments-->

    </div><!--Row-->

</div>
        
      
        
@endsection
