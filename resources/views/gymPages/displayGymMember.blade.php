
@extends('layouts.app')
@section('content')



<html>


	<link rel="stylesheet" type="text/css" href="../resources/css/profilecss.css"/>

	<div class="Usercontainer d-flex justify-content-center align-items-center">
		<div class="card">
			<div class="upper"> <img src="../images/B-B_G.jpg" class="img-fluid"> </div>
			<div class="user text-center">
				<div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
			</div>
			<div class="mt-5 text-center">
				<div class="profileName">
					<h1 class="mb-3">Kyles Gym Profile</h1> <span class="text-muted d-block mb-2">
                         
					</span> 
				</div>
				<div class="UserstatsContainer">	

				    <div class="d-flex justify-content-between align-items-center mt-4 px-4">
						<div class="stats">
							<h3 class="mb-0">Gym Goals:</h3> 
                            <br>
                            <h4>Get stronger</h4>
						</div>
						<div class="stats">
							<h3 class="mb-0">Gym experience:</h3> 
                            <br>
                            <h4>2 years</h4>
						</div>
						<div class="stats">
							<h3 class="mb-0">Workout Preference:</h3> 
                            <br>
                            <h4>Someone new </h4>
						</div>
					</div>
					
				</div>
						
                        <br>
						<a class="viewProfileBtn" href="home" >Return Home</a>
                        <br>
						<a class="viewProfileBtn" href="home" >Send friend request</a>



			</div>
		</div>
	</div>
</html>

@endsection
