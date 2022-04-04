
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
				<div class="profileName">
					<h1 class="mb-3">Welcome back, {{ Auth::user()->name }}!</h1> <span class="text-muted d-block mb-2">
					Below is your current profile. Feel free to update this!	
					</span> 
				</div>
				<div class="d-flex justify-content-between align-items-center mt-4 px-4">
					<div class="stats">
						<h3 class="mb-0">Gym Goals:</h3> <span>{{$gymProfile->getgymGoals()}}</span>
					</div>
					<div class="stats">
						<h3 class="mb-0">Gym experience:</h3> <span>{{$gymProfile->getgymExperience()}}</span>
					</div>
					<div class="stats">
						<h3 class="mb-0">Workout Preference:</h3> <span>{{$gymProfile->getworkoutPrefrence()}}</span>
					</div>
					
				</div>
						<form action="editUserGymProfile" method="post">
							{{csrf_field()}}
							<input class="viewProfileBtn" type="submit" value='Update' id="submit">

						</form>


			</div>
		</div>
	</div>
</html>

@endsection
