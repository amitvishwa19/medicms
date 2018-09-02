@extends('layouts.app')



@section("patients")
	<div class="container">		
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
		                        <i class="glyphicon glyphicon-search"></i>
		                    </button>
		                    <button name="NoFilter_x" value="1" id="NoFilter_x" type="submit" onclick="document.myform.SelectedID.value = ''; document.myform.NoDV.value=1; return true;" class="btn btn-default" title="Show All">
		                        <i class="glyphicon glyphicon-remove-circle"></i>
		                    </button>
		                </span>
		            </div>
		        </div>
		        </div>
		    </h1>
		</div>
	</div><!--Container-->	
@endsection