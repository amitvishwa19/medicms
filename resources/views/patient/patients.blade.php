@extends('layouts.app')

@section('title','Patients | MediCMS')


@section("body")
	

		<!--Page header-->	
		<div class="page-header">
		    <h1><div class="row">
		        <div class="col-sm-8">
		            <a style="text-decoration: none; color: inherit;" href="patients_view.php">
		                <i class="fa fa-user" aria-hidden="true"></i>
		                Patients
		            </a>
		        </div>
		        <div class="col-sm-4">
		            <div class="input-group" id="quick-search">
		                <input type="text" name="SearchString" value="" class="form-control" placeholder="Quick Search">
		                <span class="input-group-btn">
		                    <button name="Search_x" value="1" id="Search" type="submit" onclick="document.myform.SelectedID.value = ''; document.myform.NoDV.value=1; return true;" class="btn btn-default" title="Quick Search">
		                        <i class="fa fa-search" aria-hidden="true"></i>
		                    </button>
		                    <button name="NoFilter_x" value="1" id="NoFilter_x" type="submit" onclick="document.myform.SelectedID.value = ''; document.myform.NoDV.value=1; return true;" class="btn btn-default" title="Show All">
		                        <i class="fa fa-times" aria-hidden="true"></i>
		                    </button>
		                </span>
		            </div>
		        </div>
		        </div>
		    </h1>
		</div><!--Page header-->	

		
		<!--Button groups-->
		<div id="top_buttons" class="hidden-print">
		    <div class="btn-group visible-md visible-lg all_records pull-left">
		        
		      
		        <button type="submit" name="Print_x" id="Print" value="1" class="btn btn-default">
		            <i class="fa fa-print" aria-hidden="true"></i>
		            Print Preview       
		        </button>
		        <button type="submit" name="CSV_x" id="CSV" value="1" class="btn btn-default">
		        <i class="fa fa-download" aria-hidden="true"></i>
		            Save CSV        
		        </button>
		        <button type="submit" name="Filter_x" id="Filter" value="1" class="btn btn-default">
		           <i class="fa fa-filter" aria-hidden="true"></i>
		            Filter
		        </button>
		        <button type="submit" name="NoFilter_x" id="NoFilter" value="1" class="btn btn-default">
		            <i class="fa fa-times" aria-hidden="true"></i>
		            Show All
		        </button>
		    </div>
		</div><!--Button groups-->

		<div class="clearfix"></div>
		<p></p>


		<!--patient table-->
		<div class="row">
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					patients
					<a href="{{url('patient/create')}}" class="btn btn-success btn-sm pull-right my-add-new-button">Add New</a> 
				</div>
				<div class="panel-body">			
				    <div class="table_view col-xs-12 ">
				        <div class="table-responsive">
					        <table class="table" >
					            <thead>
					                <tr>
					                  
					                    <th class="patients-last_name">
					                        <a href="" class="TableHeader">
					                            Last name
					                        </a>
					                    </th>
						               <th class="patients-first_name">
					                       <a href="" class="TableHeader">
					                           First name
					                       </a>
					                    </th>
						               <th class="patients-gender">
					                        <a href="" class="TableHeader">
					                            Gender
					                        </a>
					                    </th>
						               <th class="patients-sexual_orientation">
					                       <a href="" class="TableHeader">
					                           Date of Birth
					                       </a>
					                    </th>
					                    <th class="patients-age">
					                        <a href="#" class="TableHeader">
					                        Age
					                        </a>
					                    </th>
					                    <th class="patients-age">
					                        <a href="#" class="TableHeader">
					                        Tobaco Usage
					                        </a>
					                    </th>	
					                    <th class="patients-age">
					                        <a href="#" class="TableHeader">
					                        Alcohol Intake
					                        </a>
					                    </th>
					                    <th class="patients-age">
					                        <a href="#" class="TableHeader">
					                        Mobile
					                        </a>
					                    </th>						                   					                   
					                    <th class="patients-mobile">
					                        <a href="" class="TableHeader">
					                            Edit
					                        </a>
					                    </th>
					                    <th class="patients-mobile">
					                        <a href="" class="TableHeader">
					                            Delete
					                        </a>
					                    </th>
					                    

						           </tr>
					            </thead>
					            
					            <tbody><!-- tv data below -->		             
					                  
					                @foreach($patients as $patient)				                	
					                  
					                <tr id="{{$patient-> id}}" data-toggle="modal" data-target="#myModal-edit" class="table-row">                               
					                    <td >{{$patient-> lastname}}</td>
					                    <td>{{$patient-> firstname}}</td>
					                    <td>{{$patient-> gender}}</td>
					                    <td>{{$patient-> birth_date}}</td>
					                    <td>{{$patient-> age}}</td>	
					                    <td>{{$patient-> tobaco_usage}}</td>
					                    <td>{{$patient-> alcohol_intake}}</td>
					                    <td>{{$patient-> mobile}}</td>
										<td><a href="{{url('patient/' .$patient->id. '/edit')}}" class="btn btn-warning btn-sm"> Edit </a></td>
					                    <td><a href="{{url('patient/' .$patient->id. '/delete')}}" class="btn btn-danger btn-sm">Delete</a></td>

					                </tr>
					                @endforeach
					                            		               
					            </tbody>

						        <tfoot>
					                <tr>
					                    <td colspan="15">
					                        <div class="alert alert-warning">
					                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					                                No matches found!
					                        </div>
					                    </td>
					                </tr>
					            </tfoot>
					        </table>
				    	</div>
				    </div>
				</div>    
			</div>
		</div>


@endsection