@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Zip Codes</h3>
	<a href="{{url('zipcode')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Internee</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Name</option>
						<option value="2">Email</option>
						<option value="3">Role</option>
						<option value="4">Publication Status</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>

				
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Zip Code</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>					
						@if(isset($viewcodes))
						@foreach($viewcodes as $viewcode)
							<tr>
								<td>{{$viewcode->id}}</td>
								<td>{{$viewcode->zipcode}}</td>
								<td>
                                <a class="btn btn-danger" href="{{url('delete-zipcode',$viewcode->id)}}">Delete<i 
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