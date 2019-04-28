@extends('adminView.layout')

@section('main')

	@if($data->count() > 0)

	<table class="table table-bordered table-striped">
 		<tr>
		  <th width="10%">Image</th>
		  <th width="20%">First Name</th>
		  <th width="20%">Last Name</th>
		  <th width="20%">Designation</th>
		  <th width="20%">Email</th>
		  <th width="20%">Contact No</th>
		  <th width="20%">Description</th>
		  <th width="20%">Fees</th>
		  <th width="20%">Action</th>
 		</tr>

 		 	@foreach($data as $row)
	 		<tr>
	 			<td><img src="{{ URL::to('/') }}/backEnd/images/{{ $row->image }}" width="75px"></td>
	 			<td>{{ $row->frist_name }}</td>
	 			<td>{{ $row->last_name }}</td>
	 			<td>{{ $row->designation }}</td>
	 			<td>{{ $row->email }}</td>
	 			<td>{{ $row->contact_no }}</td>
	 			<td>{{ $row->description }}</td>
	 			<td>{{ $row->fees }}</td>
	 			<td>
	 				
	 			</td>
	 		</tr> 
	 		@endforeach
	 	</table>
	 	{{ $data->links() }}
	 @else
	 	<div><p>No Data Found</p></div>	

	@endif	 	

<div align="left">
 <a href="{{ route('members.create') }}" class="btn btn-default">Create Members</a>
</div>
@endsection