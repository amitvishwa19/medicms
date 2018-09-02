@extends('layouts.app')

@section('title','New Patient | MediCMS')


@section("body")




<div class="col-xs-12 detail_view" >
	<div class="panel panel-info">
		<!--Panel Heading-->
        <div class="panel-heading">
            <strong class="panel-title">
                    <span >Add new Patient</span>
                    <span></span>
                    <span class="p-name"></span>
                    <span class="p-regid"></span>
                </strong>
            <!--/h3-->
            <a href="{{url('patient')}}" class="btn btn-warning btn-sm pull-right my-add-new-button">Cancel</a>
        </div>

    <div class="panel-body" id="patients_dv_container">
    	<form class="form-horizontal" action="{{ action('PatientControler@store') }}" method="post">
    		
    	{{csrf_field()}}

    					<div class="form-group">
                            <label for="lastname" class="control-label col-lg-3">Last name<span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input maxlength="40" type="text" class="form-control" name="lastname" id="lastname" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstname" class="control-label col-lg-3">First name<span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input maxlength="40" type="text" class="form-control" name="firstname" id="firstname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="control-label col-lg-3">Gender<span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select class="form-control" id="gender" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    <option value="" selected="" class="active">Unknown</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="s2id_autogen2" class="control-label col-lg-3">Sexual orientation<span class="text-danger"></span></label>
                            
                            <div class="col-lg-9">
                                <select class="form-control">
                                    <option value="Unknown" selected="" class="active">Unknown</option>
                                    <option value="Opposite gender">Opposite gender</option>
                                    <option value="Same gender">Same gender</option>
                                    <option value="Asexuality">Asexuality</option>
                                    <option value="Bisexuality">Bisexuality</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birthdate" class="control-label col-lg-3">Birth date</label>
                            <div class="col-lg-9">
                                <input maxlength="40" type="date" class="form-control" name="birthdate" id="birthdate" placeholder="MM/DD/YYYY">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="age" class="control-label col-lg-3">Age <i class="fa fa-info text-info" data-toggle="collapse" data-target="#age-description" aria-hidden="true"></i></label>
                            <div class="col-lg-9">
                                <span class="help-block collapse" id="age-description"><div class="alert alert-info">Automatically calculated from birth date.</div></span>

                                <div class="form-control-static" id="age"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="control-label col-lg-3">Email</label>
                            <div class="col-lg-9">
                                <input maxlength="40" type="text" class="form-control" name="email" id="email" value="">
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <label for="mobile" class="control-label col-lg-3">Mobile</label>
                            <div class="col-lg-9">
                                <input maxlength="40" type="text" class="form-control" name="mobile" id="mobile" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="s2id_autogen4" class="control-label col-lg-3">Tobacco usage<span class="text-danger">*</span></label>
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
                            <label for="s2id_autogen5" class="control-label col-lg-3">Alcohol Intake<span class="text-danger">*</span></label>
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
                            <label for="s2id_autogen6" class="control-label col-lg-3">History<span class="text-danger">*</span></label>
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
                            <label for="genetic_diseases" class="control-label col-lg-3">Genetic diseases</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="genetic_diseases" id="genetic_diseases" rows="5"></textarea>
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
                                <textarea name="comments" id="comments" rows="5" style="display: none;"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="filed" class="control-label col-lg-3">Filed <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#filed-description"></i></label>
                            <div class="col-lg-9">
                                <span class="help-block collapse" id="filed-description"><div class="alert alert-info">This field is automatically populated with the date and time when this record was created.</div></span>

                                <div class="form-control-static" id="filed"><!-- creationDateTime --></div>
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="last_modified" class="control-label col-lg-3">
                            Last modified
                            <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#last_modified-description">
                            </i>
                        </label>
                        <div class="col-lg-9">
                            <span class="help-block collapse" id="last_modified-description"><div class="alert alert-info">This field is automatically populated with the date and time when this record was last modified.</div></span>

                            <div class="form-control-static" id="last_modified"><!-- editingDateTime --></div>
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