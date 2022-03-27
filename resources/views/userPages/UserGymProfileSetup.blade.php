
@extends('layouts.app')
@section('content')

<html>


	<style>

        .smallWords{
            font-size: 17px;
        }

        .Cardcontainer{
            display: flex;
            justify-content: center;
            text-align: center;
			margin-top: -350px;

        }

        .gymProfileCard  {
            background-color: white;
            width: 400px;
            height: 500px;
            margin: 10px;
            border-radius: 15px;
        }

        .gymProfileCard-image {
            height: 170px;
            margin-bottom: 15px;
            background-size: cover;
            border-radius: 15px 15px 0 0;

        }

        .gymProfileCard h2 {
            padding: 10px;
        }
        
        .gymProfileCard p {
            padding: 6px;
            font-size: 18px;
        }

        .gymProfileCard a {
            font-size: 20px;
            background-color: #041137;
            color: white;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 65px 65px;
            text-decoration: none;
        }

        .gymProfileCard:hover{
            background-color: #A9A9A9;
            color: white;
            cursor: pointer;
            transform:scale(1.03);
            transition: all 1.5s ease;
        }

        .descTxt{
            font-size: 30px;
        }

       




        .gym-1 {
            background-image: url('../images/gymBackground.jpeg')
        }

        .gym-2{
            background-image: url('../images/cross-fitGym.jpg')
        }

        .gym-3{
            background-image: url('../images/B-B_G.jpg')
        }

    </style>

	<link rel="stylesheet" type="text/css" href="../resources/css/profilecss.css"/>

	<div class="Usercontainer d-flex justify-content-center align-items-center">
		<div class="topcard">
			<div class="mt-5 text-center">
					<div class="titleText">	
						<h2>Having a to-the-point Gym profile is key for finding other users</h2>
					</div>

					<div class="topbody">
						<h2>By creating a gym profile, you are able to answer 3 of the most import 
							questions any gym member needs to ask themselves: 
						</h2>
					</div>
            </div>
		</div>
	</div>


	<section class="Cardcontainer" display: flex;>
        <div class="gymProfileCard">
            <div class="gymProfileCard-image gym-1"></div>
            <h2>Gym Goals</h2>
            <p>Gyms goals are key to staying motivated in the gym. Whether it is weight loss or muscle gain, pick a gym goal that 
				will keep you motivated! </p>
        </div>
        
        <div class="gymProfileCard">
            <div class="gymProfileCard-image gym-2"></div>
            <h2>Gym Experience</h2>
            <p>Just like most other activitis, the longer you do it, the better you get. By setting your gym experience,
				you are able to display the length of time that you have stayed dedicated to creating a better version of yourself. 
			</p>

        </div>


        <div class="gymProfileCard">
            <div class="gymProfileCard-image gym-3"></div>
            <h2>Workout Preference</h2>
            <p>This gym is great for body building. Gaining size along with stenth is a great way to stay motiviated!</p>

        </div>
    </section>

	<div class="Usercontainer d-flex justify-content-center align-items-center">
		<div class="setupCard">
			<div class="upper"> <img src="../images/bluebg.jpg" class="img-fluid"> </div>
			<div class="user text-center">
				<div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>

			</div>
			<div class="mt-5 text-center">
				<h4 class="mb-0">{{ Auth::user()->name }}</h4> <span class="text-muted d-block mb-2"></span> 
				<button class="btn btn-primary btn-sm follow">Follow</button>
				<div class="d-flex justify-content-between align-items-center mt-4 px-4">

					
				</div>
						
                        <a href="userGymProfilePage">{{__('Add profile ')}}</a>

                       <br>

                         <a href="userGymProfile">{{__('View profile ')}}</a>
            </div>
		</div>
	</div>

    

</html>

@endsection