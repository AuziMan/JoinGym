
@extends('layouts.app')
@section('content')

<html>




	<link rel="stylesheet" type="text/css" href="../resources/css/profilecss.css"/>

	<div class="Usercontainer d-flex justify-content-center align-items-center">
		<div class="card">
			<div class="upper"> <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid"> </div>
			<div class="user text-center">
				<div class="profile"> <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80"> </div>
			</div>
			<div class="mt-5 text-center">
				<h4 class="mb-0">{{ Auth::user()->name }}</h4> <span class="text-muted d-block mb-2"></span> <button class="btn btn-primary btn-sm follow">Follow</button>
				<div class="d-flex justify-content-between align-items-center mt-4 px-4">
					<div class="stats">
						<h6 class="mb-0">Gym Goals</h6> <span>{{$gymProfile->getgymGoals()}}</span>
					</div>
					<div class="stats">
						<h6 class="mb-0">Gym experience</h6> <span>{{$gymProfile->getgymExperience()}}</span>
					</div>
					<div class="stats">
						<h6 class="mb-0">Workout Preference</h6> <span>{{$gymProfile->getworkoutPrefrence()}}</span>
					</div>
					
				</div>
						<form action="editUserGymProfile" method="post">
						{{csrf_field()}}
						<input type="submit" value='Edit' id="submit">
						</form>
			</div>
		</div>
	</div>
</html>

@endsection
