@extends('layouts.app')

@section('content')

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
                        <a href="{{URL::to('/patient/create')}}" style="color:#fff;" Class="pull-right glyphicon glyphicon-plus"></a>
                </div>
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    Jaideep Singh
                                </a>
                                <a href="">
                                    <i class="fa fa-eye pull-right" aria-hidden="true"></i>
                                </a>
                            </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="user-summary">
                                        name
                                        last visited
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                       Patient 2
                                    </a>
                                    <a href="">
                                        <i class="fa fa-eye pull-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">                                       
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    Patient 3
                                </a>
                                <a href="">
                                <i class="fa fa-eye pull-right" aria-hidden="true"></i>
                                </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                            
                                </div>
                            </div>
                        </div>

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
