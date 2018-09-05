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