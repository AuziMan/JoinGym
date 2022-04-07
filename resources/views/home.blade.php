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
                            <h1 class="titleText">Welcome to JoinGym</h1>
                            <h2>Below are a list of Gyms that you are able to join!</h2>
                            <br>
                            <h3 class="smallWords">Select each gym and explore what each gym group has to offer!</h3>

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
            width: 1200px;
            font-family: 'Oswald', sans-serif;

            

        }

        .titleText{
            font-size: 55px;
            width:400px;
            margin-left: 60px;
            border-radius: 15px;
            background: #F55C57;
        }

        .groupGymimg{
            background-image: url('../images/groupGymimg1.png');
            width: 500px;
            height: 450px;
            background-size: cover;
            margin-left: 190px;

        }

        .smallWords{
            font-size: 17px;

        }

        

        .masthead{

        }

        .headerContainer{
            text-align: center;
            color: #041137;
            background-color: #A9A9A9;
            margin: auto;
            width: 500px;
            height: 450px;
            font-family: 'Oswald', sans-serif;
            padding-top: 15px;

        }

        .headerContainer h2{
            padding: 38px;
        }

        .Cardcontainer{
            display: flex;
            justify-content: center;
            text-align: center;

        }

        .gymCardHome  {
            background-color: white;
            width: 400px;
            height: 500px;
            margin: 10px;
            border-radius: 15px;
        }

        .gymCardHome-image {
            height: 170px;
            margin-bottom: 15px;
            background-size: cover;
            border-radius: 15px 15px 0 0;

        }

        .gymCardHome h2 {
            padding: 10px;
            font-family: 'Oswald', sans-serif;

        }
        
        .gymCardHome p {
            padding: 6px;
            font-size: 20px;
            font-family: 'Oswald', sans-serif;

        }

        .gymCardHome a {
            font-size: 20px;
            background-color: #041137;
            color: white;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 65px 65px;
            text-decoration: none;
            font-family: 'Oswald', sans-serif;

        }

        .gymCardHome:hover{
            background-color: #A9A9A9;
            color: white;
            cursor: pointer;
            transform:scale(1.03);
            transition: all 0.7s ease;
        }

        .descTxt{
            font-size: 30px;
        }

       

        .gymDisplayHome-image {
            margin-left: 40px;
            padding-top: 105px;
            height: 800px;
            width: 95%;
            margin-bottom: 15px;
            background-size: cover;
            border-radius: 15px 15px 0 0;

        }

        .gym1DisplayContainer{
            text-align: center;
            color: #041137;
            background-color: #A9A9A9;
            margin: auto;
            width: 500px;
            height: 450px;
            font-family: 'Oswald', sans-serif;
            padding-top: 45px;
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


    <section class="Cardcontainer" display: flex;>
        <div class="gymCardHome">
            <div class="gymCardHome-image gym-1"></div>
            <h2>Gym 1</h2>
            <p>This gym is great for beginner lifters. Beginning a fitness jounry can be intimdating. Find others to support you!</p>
            <a href="gymPage1" >Join Gym 1</a>
        </div>
        
        <div class="gymCardHome">
            <div class="gymCardHome-image gym-2"></div>
            <h2>Gym 2</h2>
            <p>This gym is great for cross-fit athletes looking to improve athletic performance. Find others like you</p>
            <a href="gymPage2" >Join Gym 2</a>

        </div>


        <div class="gymCardHome">
            <div class="gymCardHome-image gym-3"></div>
            <h2>Gym 3</h2>
            <p>This gym is great for body building. Gaining size along with stenth is a great way to stay motiviated!</p>
            <a href="gymPage3" >Join Gym 3</a>

        </div>
    </section>
</div>


    <style>
        .showcaseTitle{
            margin-top: 100px;
            text-align: center;
            border-style: dashed;
        }

    </style>

    <section>
        <div class="showcaseTitle">
            <h1>Read a bit about each gym below!</h1>
        </div>

        <div class="gym1InfoBody">
            <div class="gymDisplayHome-image gym-1">
                <div class="gym1DisplayContainer">
                    <div class="row">
                        <div class="col-xl-15 mx-auto position-relative">
                            <h1 class="titleText">Welcome to JoinGym</h1>
                            <h2>Below are a list of Gyms that you are able to join!</h2>
                            <br>
                            <h3 class="smallWords">Select each gym and explore what each gym group has to offer!</h3>

                            <br>
                            <br>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    

   
</body>

</html>


@endsection





