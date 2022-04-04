
@extends('layouts.app') 
@section('content')





<html>

	<link rel="stylesheet" type="text/css" href="../resources/css/profilecss.css"/>

	<div class="Usercontainer d-flex justify-content-center align-items-center">
		<div class="card">
			<div class="upper"> <img src="../images/gymBackground.jpeg" class="img-fluid"> </div>
			<div class="user text-center">
				<div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
			</div>
			<div class="mt-5 text-center">
				<h4 class="mb-0">{{ Auth::user()->name }}</h4> <span class="text-muted d-block mb-2">{{$moreInfoData->address}}</span> <button class="btn btn-primary btn-sm follow">Follow</button>
				<div class="d-flex justify-content-between align-items-center mt-4 px-4">
					<div class="stats">
						<h6 class="mb-0">Age</h6> <span>{{$moreInfoData->age}}</span>
					</div>
					<div class="stats">
						<h6 class="mb-0">Gender</h6> <span>{{$moreInfoData->gender}}</span>
					</div>
					<div class="stats">
						<h6 class="mb-0">Phone number</h6> <span>{{$moreInfoData->phonenumber}}</span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</html>
@endsection
