@extends('adminView.layout')

@section('main')

	<form name="createMembers" method="post" action="{{ route('members.store') }}" enctype="multipart/form-data">
	
	@csrf

	<div class="form-group">
	  	<label class="col-md-4 text-right">Enter First Name</label>
	  	<div class="col-md-8">
	   		<input type="text" name="frist_name" class="form-control input-lg" />
	  	</div>
 	</div><br>
 	<div class="form-group">
	  	<label class="col-md-4 text-right">Enter Last Name</label>
	  	<div class="col-md-8">
	   		<input type="text" name="last_name" class="form-control input-lg" />
	  	</div>
 	</div>
 	<div class="form-group">
	  	<label class="col-md-4 text-right">Enter Designation</label>
	  	<div class="col-md-8">
	   		<input type="text" name="designation" class="form-control input-lg" />
	  	</div>
 	</div>
	<div class="form-group">
	  	<label class="col-md-4 text-right">Enter Email</label>
	  	<div class="col-md-8">
	   		<input type="text" name="email" class="form-control input-lg" />
	  	</div>
 	</div>
 	<div class="form-group">
	  	<label class="col-md-4 text-right">Enter Contact No</label>
	  	<div class="col-md-8">
	   		<input type="text" name="contact_no" class="form-control input-lg" />
	  	</div>
 	</div>
 	<div class="form-group">
	  	<label class="col-md-4 text-right">Enter Description</label>
	  	<div class="col-md-8">
	  		<textarea name="description" class="form-control input-lg" rows="10" cols="5">
	  			
	  		</textarea>
	   		
	  	</div>
 	</div>
	<div class="form-group">
	  	<label class="col-md-4 text-right">Enter Fees</label>
	  	<div class="col-md-8">
	   		<input type="text" name="fees" class="form-control input-lg" />
	  	</div>
 	</div>
	
	 <div class="form-group">
	  	<label class="col-md-4 text-right">Select Profile Image</label>
	  	<div class="col-md-8">
	   		<input type="file" name="image" />
	  	</div>
 	</div>
 
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add Member" />
 </div>	
	</form>

@endsection