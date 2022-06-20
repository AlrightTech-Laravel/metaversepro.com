@extends("Admin.layout")
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
	<h3 class="text-center mb-3">All Requests</h3>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Gender</th>
							<th>LGBTQIA</th>
							<th>Age</th>
							<th>Ethnicity</th>
							<th>About</th>
							<th>Email</th>
							<th>Zip Code</th>
							<th>In Person</th>
                            <th>Location</th>
							<th>Neighborhood</th>
							<th>Weekdays</th>
							<th>Weekends</th>
							<th>Fee</th>
							<th>Whentostart</th>
							<th>Action Oriented</th>
							<th>Relational and Reflective</th>
                            <th>creative_and_integrative</th>
                            <th>Group</th>
							<th>Experties</th>
							<th>techniquerequest</th>
                            <th>Technique</th>
                            <th>Followuppreference</th>
                            <th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(isset($requests))
                        @foreach($requests as $request)
							<tr>
								<td>{{$request->id}}</td>
                                <td>{{$request->gender}}</td>
                                <td>{{$request->lgbtqia}}</td>
                                <td>{{$request->age}}</td>
                                <td>{{$request->ethnicity}}</td>
                                <td>{{$request->about}}</td>
                                <td>{{$request->email}}</td>
                                <td>{{$request->zip}}</td>
                                <td>{{$request->inperson}}</td>
                                <td>{{$request->location}}</td>
                                <td>{{$request->neighborhood}}</td>
                                <td>{{$request->weekdays}}</td>
                                <td>{{$request->weekends}}</td>
                                <td>{{$request->fee}}</td>
                                <td>{{$request->whentostart}}</td>
                                <td>{{$request->action_oriented}}</td>
                                <td>{{$request->relational_and_reflective}}</td>
                                <td>{{$request->creative_and_integrative}}</td>
                                <td>{{$request->group}}</td>
                                <td>{{$request->experties}}</td>
                                <td>{{$request->techniquerequest}}</td>
                                <td>{{$request->technique}}</td>
                                <td>{{$request->followuppreference}}</td>
                                <td>
                                <a class="btn btn-danger" href="{{url('delete-requests',$request->id)}}">Delete<i 
              						class="halflings-icon white trash">
              					</i></a>
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