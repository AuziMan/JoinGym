@extends('layouts.app')

@section('content')




<html>

<head>
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
                            <h1 class="mb-5">Welcome to JoinGym</h1>
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

        .mb-5{
            font-size: 55px;
            padding-top: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
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
            padding-bottom: 20px;
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
        }
        
        .gymCardHome p {
            padding: 4px;
            font-size: 15px;
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
            <p>This gym is great for cross-fit athletes looking to improve athletic performance. Sports are a huge aspect of others. Find others like you</p>
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

        </div>
    </section>
    

   
</body>

</html>


@endsection





