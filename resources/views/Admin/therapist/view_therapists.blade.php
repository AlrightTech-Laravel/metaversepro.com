@extends("Admin.layout")
@section('title', 'All Therapists')
@section("content")
<style>
    table{
        overflow: scroll;
        border-collapse: collapse;
    }
    div{
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
	<h3 class="text-center mb-3">All Therapists</h3>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">

				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Prefix</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Suffix</th>
							<th>Address</th>
							<th>Education</th>
							<th>License</th>
                            <th>Counseling Certification</th>
							<th>Expertise</th>
							<th>Offering now</th>
							<th>Offering Description</th>
							<th>Events</th>
							<th>Offering Description</th>
                            <th>Availability</th>
                            <th>Status</th>
                            <th>Action</th>
						</tr>
					</thead>
					<tbody>
						@if(isset($therapists))
                        @foreach($therapists as $therapist)
							<tr>
								<td>{{$therapist->id}}</td>
                                <td>{{$therapist->prefix}}</td>
                                <td>{{$therapist->first_name}}</td>
                                <td>{{$therapist->last_name}}</td>
                                <td>{{$therapist->suffix}}</td>
                                <td>{{$therapist->address}}</td>
                                <td>{{$therapist->education}}</td>
                                <td>{{$therapist->license}}</td>
                                <td>{{$therapist->counseling}}</td>
                                <td>{{$therapist->offerings}}</td>
                                <td>{{$therapist->Offering_now}}</td>
                                <td>{{$therapist->description}}</td>
                                <td>{{$therapist->events}}</td>
                                <td>{{$therapist->event_description}}</td>
                                <td>{{$therapist->availability}}</td>
                                <td>{{$therapist->status}}</td>
                                <td>
                                <a href="{{url('delete-therapist',$therapist->id)}}"><img src="img/icons/del.png" width="30px;" height="30px"></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{url('approve-therapist',$therapist->id)}}"><img src="img/icons/approve.png" width="30px;" height="30px"></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{url('reject-therapist',$therapist->id)}}"><img src="img/icons/reject.png" width="30px;" height="30px"></a>
								</td>
							</tr>
						@endforeach
                        @endif
					</tbody>
				</table>
			</div>
		</div>
	</div>


@endsection