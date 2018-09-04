@extends('layouts.app')

@section('title','New Patient | MediCMS')


@section("new_body")




<div class="col-xs-12 detail_view" >
	<div class="panel panel-info">
		<!--Panel Heading-->
        <div class="panel-heading">
            <strong class="panel-title">
                    <span >{{ucfirst(substr(Route::currentRouteName(),8))}} Patient</span>
                    
                    <span></span>
                    <span class="p-name"></span>
                    <span class="p-regid"></span>
                </strong>
            <!--/h3-->
            <a href="{{url('patient')}}" class="btn btn-warning btn-sm pull-right my-add-new-button"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>

        </div>

    
    
    <div class="panel-body" id="patients_dv_container">
    	<!--form class="form-horizontal" action="{{ action('PatientControler@store') }}" method="post"-->
        <form class="form-horizontal" action="{{ url('/patient') }}@yield('patient_id')" method="post">
    	<!--form class="form-horizontal" action="{{ action('PatientControler@store') }}/@yield('patient_id')" method="post"-->

       

    	{{csrf_field()}}
        
        @section('edit_patient')

        @show
   					
        
            <div class="form-group">
                <label for="firstname" class="control-label col-lg-3">First name<span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <input maxlength="40" type="text" class="form-control" name="firstname" id="firstname" value="@yield('first_name')" required="Please enter first name">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="control-label col-lg-3">Last name<span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <input maxlength="40" type="text" class="form-control" name="lastname" id="lastname" value="@yield('last_name')" required>
                </div>
            </div>
            <div class="form-group">
                <label for="gender" class="control-label col-lg-3">Gender<span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <option value="@yield('gender')" selected="" class="active">@yield('gender')</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="birthdate" class="control-label col-lg-3">Birth date<span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <input maxlength="40" type="date" class="form-control" name="birthdate" id="birthdate" placeholder="MM/DD/YYYY" value="@yield('birth_date')">
                </div>
            </div>        
            <div class="form-group">
                <label for="mobile" class="control-label col-lg-3">Email<span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <input maxlength="40" type="text" class="form-control" name="email" id="email"value="@yield('email')">
                </div>
            </div>                             
            <div class="form-group">
                <label for="mobile" class="control-label col-lg-3">Mobile</label>
                <div class="col-lg-9">
                    <input maxlength="40" type="text" class="form-control" name="mobile" id="mobile" value="@yield('mobile')">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="control-label col-lg-3">Address</label>
                <div class="col-lg-9">
                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="city" class="control-label col-lg-3">City<span class="text-danger">*</span></label>
                <div class="col-lg-6">                              
                    <select name="city" id="city" class="form-control">
                        <option value="Unknown" selected="" class="active">Unknown</option>
                        <option value="Non-smoker">Baroda</option>
                        <option value="Light smoker">Ahmedabad</option>
                        <option value="Average smoker">BlaBla</option>                                
                    </select>                                      
                </div>
            </div>
            <div class="form-group">
                <label for="state" class="control-label col-lg-3">State<span class="text-danger">*</span></label>
                <div class="col-lg-6">                              
                    <select name="state" id="state" class="form-control">
                        <option value="Unknown" selected="" class="active">Unknown</option>
                        <option value="Non-smoker">Gujarat</option>
                        <option value="Light smoker">MP</option>
                        <option value="Average smoker">UP</option>                                
                    </select>                                      
                </div>                           
            </div>
            <div class="form-group">
                <label for="country" class="control-label col-lg-3">Country<span class="text-danger">*</span></label>
                <div class="col-lg-6">                              
                    <select name="country" id="state" class="form-control">
                        <option value="Unknown" selected="" class="active">Unknown</option>
                        <option value="Non-smoker">Gujarat</option>
                        <option value="Light smoker">MP</option>
                        <option value="Average smoker">UP</option>                                
                    </select>                                      
                </div>
            </div>
            <div class="form-group">
                <label for="zip" class="control-label col-lg-3">ZIP<span class="text-danger">*</span></label>
                <div class="col-lg-6">
                    <input maxlength="40" type="text" class="form-control" name="zip" id="mobile" value="@yield('mobile')">
                </div>
            </div>
            <div class="form-group">
                <label for="s2id_autogen4" class="control-label col-lg-3">Tobacco usage</label>
                <div class="col-lg-9">
                    
                    <select name="tobacco_usage" id="tobacco_usage" class="form-control">
                        <option value="Unknown" selected="" class="active">Unknown</option>
                        <option value="Non-smoker">Non-smoker</option>
                        <option value="Light smoker">Light smoker</option>
                        <option value="Average smoker">Average smoker</option>
                        <option value="Social smoker">Social smoker</option>
                        <option value="Heavy smoker">Heavy smoker</option>
                        <option value="Serial quitter">Serial quitter</option>
                        <option value="Quitter">Quitter</option>
                    </select>                                      
                </div>
            </div>
            <div class="form-group">
                <label for="s2id_autogen5" class="control-label col-lg-3">Alcohol Intake</label>
                <div class="col-lg-9">
                    
                    <select name="alcohol_intake" id="alcohol_intake" class="form-control select2-offscreen" tabindex="-1">
                        <option value="Unknown" selected="" class="active">Unknown</option>
                        <option value="Non-drinker">Non-drinker</option>
                        <option value="Light drinker">Light drinker</option>
                        <option value="Social drinker">Social drinker</option>
                        <option value="Pressured drinker">Pressured drinker</option>
                        <option value="Daily drinker">Daily drinker</option>
                        <option value="Binge drinker">Binge drinker</option>
                        <option value="Compulsive drinker">Compulsive drinker</option>
                        <option value="Addicted drinker">Addicted drinker</option>
                        <option value="Serial quitter">Serial quitter</option>
                        <option value="Quitter">Quitter</option>
                    </select>
                    
                </div>
            </div>
            <div class="form-group">
                <label for="s2id_autogen6" class="control-label col-lg-3">History</span></label>
                <div class="col-lg-9">
                    
                    <select  name="history" id="history" class="form-control select2-offscreen" tabindex="-1">
                        <option value="Unkown">Unkown</option>
                        <option value="Asthma">Asthma</option>
                        <option value="Diabetes">Diabetes</option>
                        <option value="Blood pressure">Blood pressure</option>
                        <option value="Medication allergies">Medication allergies</option>
                        <option value="Food allergies">Food allergies</option>
                        <option value="None">None</option>
                    </select>
                    
                </div>
            </div>
            <div class="form-group">
                <label for="surgical_history" class="control-label col-lg-3">Surgical history</label>
                <div class="col-lg-9">
                    <textarea class="form-control" name="surgical_history" id="surgical_history" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="obstetric_history" class="control-label col-lg-3">Obstetric history</label>
                <div class="col-lg-9">
                    <textarea class="form-control" name="obstetric_history" id="obstetric_history" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="contact_person" class="control-label col-lg-3">Contact person in case of Emergency</label>
                <div class="col-lg-9">
                    <input maxlength="100" type="text" class="form-control" name="contact_person" id="contact_person" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="other_details" class="control-label col-lg-3">
                    Other details
                </label>
                <div class="col-lg-9">
                    <textarea class="form-control" name="other_details" id="other_details" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="comments" class="control-label col-lg-3">
                    Comments
                </label>
                <div class="col-lg-9">						
                    <textarea class="form-control" name="comments" id="comments" rows="5"></textarea>
                </div>
            </div>
                
            <hr>
            
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>



		</form>	
    </div><!--Pannel body-->
	</div>
</div>

@endsection