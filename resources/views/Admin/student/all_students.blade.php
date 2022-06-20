@extends("Admin.layout")
@section('title', 'All Students')
@section("content")
<style>
	table {
		overflow: scroll;
		border-collapse: collapse;
	}

	div {
		overflow-y: hidden;
	}
</style>
<div class="row">
	<div>
		@if (session()->has('message'))
		<div class="alert alert-danger">
			{{ session('message') }}
		</div>
		@endif
	</div>
	<h3 class="text-center mb-3">All Students</h3>
	<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
		<div class="card flex-fill">

			@if (count($students) > 0)

			<table class="table table-hover my-0" id="myTable">
				<thead>
					<tr>
						<th>Sr #</th>
						<th>Prefix</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Suffix</th>
						<th>Image</th>
						<th>Address</th>
						<th>Education</th>
						<th>Internship</th>
						<th>Intern Hours</th>
						<th>Exam Study Group</th>
						<th>Availability</th>
						<th>Description</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($students))
					@foreach($students as $student)
					<tr>
						<td>{{$student->id}}</td>
						<td>{{$student->prefix}}</td>
						<td>{{$student->first_name}}</td>
						<td>{{$student->last_name}}</td>
						<td>{{$student->suffix}}</td>
						<td>
							<img src="{{asset('images/'.$student->image)}}" alt="{{$student->first_name}}"
								class="img-fluid" width="100px">
						</td>
						<td>{{$student->address}}</td>
						<td>{{$student->education}}</td>
						<td>{{$student->internships}}</td>
						<td>{{$student->intern_hours}}</td>
						<td>{{$student->exam_study_group}}</td>
						<td>{{$student->availability}}</td>
						<td>{{$student->description}}</td>
						<td>
							<a href="{{url('delete-student',$student->id)}}"><img src="img/icons/del.png" width="30px;" height="30px"></a>
						</td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table>

			@else

			<div class="alert alert-danger">
				No students found
			</div>

			@endif
		</div>
	</div>
</div>


@endsection