@extends('layouts.app')

@section('content')




<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Oswald:wght@500&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Home - Brand</title>
    <link rel="stylesheet" href="style.css">
</head>



<body style=background-color:#383B4D> 
    <header class="text-center text-white masthead">
        <div class="overlay">
            <div class="container"></div>
        </div>
        <div class="titleContainer">
            <div class="groupGymimg"></div>

                <div class="headerContainer">
                    <div class="row">
                        <div class="col-xl-15 mx-auto position-relative">
                            <h1 class="mb-5">Welcome to Gym Number 3</h1>
                            <h2>Below are a list of members that you are able to connect with!</h2>
                            <br>
                            <h3 class="smallWords">Select a user below and view their profile and see if they are a good match!</h3>

                            <br>
                            <br>
                        </div>
                    </div>
                </div>
        </div>
    </header>
    


    <style>

        .titleContainer{
            margin-left: 80px;
            display: flex;
            width: 1300px;
            font-family: 'Oswald', sans-serif;

            

        }

        .groupGymimg{
            background-image: url('../images/B-B_G.jpg');
            width: 500px;
            height: 450px;
            background-size: cover;
            margin-left: 190px;

        }

        .smallWords{
            font-size: 17px;
            padding: 15px;
        }

        .mb-5{
            font-size: 55px;
            padding-top: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        

        .headerContainer{
            text-align: center;
            color: #041137;
            background-color: #C24936;
            margin: auto;
            width: 550px;
            height: 450px;
            padding-bottom: 20px;
        }

        .Cardcontainer{
            display: flex;
            justify-content: center;
            text-align: center;

        }

        .userCardHome  {
            background-color: #C24936;
            width: 330px;
            height: 500px;
            margin: 10px;
            border-radius: 15px;
        }

        .userCardHome-image {
            height: 170px;
            margin-bottom: 15px;
            background-size: cover;
            border-radius: 15px 15px 0 0;

        }

        .userCardHome h2 {
            padding: 10px;
            font-family: 'Oswald', sans-serif;

        }
        
        .userCardHome p {
            padding: 4px;
            font-size: 17px;
            font-family: 'Oswald', sans-serif;

        }

        .userCardHome a {
            font-size: 20px;
            background-color: #041137;
            color: white;
            padding: 5px 10px;
            display: block;
            text-align: center;
            margin: 35px 35px;
            text-decoration: none;
        }

        .userCardHome:hover{
            background-color: #A9A9A9;
            color: white;
            cursor: pointer;
            transform:scale(1.02);
            transition: all 0.7s ease;
        }

        .descTxt{
            font-size: 30px;
        }

        .profile{
            margin-top: -85px;
        }

        .userInfoBorder{
            margin-left: 15px;
            width: 90%;
            border-radius: 15px;
            background:#A9A9A9
        }

        .gym-3{
            background-image: url('../images/B-B_G.jpg')
        }

    </style>

<br>
<br>

<section class="Cardcontainer" display: flex;>

    <div class="userCardHome">
        <div class="userCardHome-image gym-3"></div>
        <div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
            <h2>Timmy</h2>
            <div class="userInfoBorder">
                <p>Gym Goals: Get stronger</p>
                <p>Gym Experience: Less than one year</p>
                <p>Workout Preference: With my friends</p>
            </div>
            <a href="displayGymMember" >Connect!</a>

    </div>
    
    <div class="userCardHome">
        <div class="userCardHome-image gym-3"></div>
        <div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
        <h2>John</h2>
        <div class="userInfoBorder">
            <p>Gym Goals: Lose Weight</p>
            <p>Gym Experience: Very new</p>
            <p>Workout Preference: Alone</p>
        </div>
        <a href="displayGymMember" >Connect!</a>
    </div>


    <div class="userCardHome">
        <div class="userCardHome-image gym-3"></div>
        <div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
        <h2>Sarah</h2>
        <div class="userInfoBorder">
            <p>Gym Goals: Get strong</p>
            <p>Gym Experience: Almost one year</p>
            <p>Workout Preference: With other people</p>
        </div>
        <a href="displayGymMember" >Connect!</a>
    </div>

    <div class="userCardHome">
        <div class="userCardHome-image gym-3"></div>
        <div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
        <h2>Jeniffer</h2>
        <div class="userInfoBorder">
            <p>Gym Goals: Build Muscle</p>
            <p>Gym Experience: 2 years</p>
            <p>Workout Preference: With friends</p>
        </div>
        <a href="displayGymMember" >Connect!</a>
    </div>


</section>

    <br>
    <br>
    <br>

    <section class="Cardcontainer" display: flex;>

        <div class="userCardHome">
            <div class="userCardHome-image gym-3"></div>
            <div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
                <h2>Johnathan</h2>
                <div class="userInfoBorder">
                    <p>Gym Goals: Get stronger</p>
                    <p>Gym Experience: Less than one year</p>
                    <p>Workout Preference: With my friends</p>
                </div>
                <a href="displayGymMember" >Connect!</a>

        </div>
        
        <div class="userCardHome">
            <div class="userCardHome-image gym-3"></div>
            <div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
            <h2>Kyle</h2>
            <div class="userInfoBorder">
                <p>Gym Goals: Get Stronger</p>
                <p>Gym Experience: 2 years</p>
                <p>Workout Preference: Someone new</p>
            </div>
            <a href="displayGymMember" >Connect!</a>
        </div>


        <div class="userCardHome">
            <div class="userCardHome-image gym-3"></div>
            <div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
            <h2>Josie</h2>
            <div class="userInfoBorder">
                <p>Gym Goals: Get strong</p>
                <p>Gym Experience: Almost one year</p>
                <p>Workout Preference: With other people</p>
            </div>
            <a href="displayGymMember" >Connect!</a>
        </div>

        <div class="userCardHome">
            <div class="userCardHome-image gym-3"></div>
            <div class="profile"> <img src="../images/marioPFP.jpeg" class="rounded-circle" width="80"> </div>
            <h2>Parker</h2>
            <div class="userInfoBorder">
                <p>Gym Goals: Build Muscle</p>
                <p>Gym Experience: 2 years</p>
                <p>Workout Preference: With friends</p>
            </div>
            <a href="displayGymMember" >Connect!</a>
        </div>


    </section>
</div>


    <style>
        .showcaseTitle{
            margin-top: 100px;
            text-align: center;
        }

    </style>

    <section>
        <div class="showcaseTitle">
        </div>

        <div class="gym1InfoBody">

        </div>
    </section>
    

   
</body>

</html>


@endsection





