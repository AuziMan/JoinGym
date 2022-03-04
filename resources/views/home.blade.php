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
        <div class="container">
            <div class="row">
                <div class="col-xl-15 mx-auto position-relative">
                    <h1 class="mb-5">Welcome to JoinGym</h1>
                    <h2>Below are a list of Gyms that you are able to join:</h2>
                    <br>
                    <br>
                </div>
                
            </div>
        </div>
    </header>
    


    <style>

        .container{
            display: flex;
            justify-content: center;
        }

        .gymCardHome {
            background-color: white;
            width: 400px;
            height: 500px;
            margin: 10px;
            border-radius: 15px;
        }

        .gymCardHome-image {
            height: 150px;
            margin-bottom: 15px;
            background-size: cover;
            border-radius: 15px 15px 0 0;

        }

        .gymCardHome h2 {
            padding: 10px;
        }
        
        .gymCardHome p {
            padding: 10px;
        }

        .gymCardHome a {
            font-size: 20px;
            padding: 10px;
            background-color: #041137;
            color: white;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 25% 25%;
            text-decoration: none;
        }

        .gymCardHome:hover{
            background-color: rgb(62,62,62);
            color: white;
            curor: pointer;
            transform:scale(1.03);
            transition: all 0.7s ease;
        }


        .gym-1 {
            background-image: url('../images/gymBackground.jpeg')
        }

        .gym-2{
            background-image: url('../images/gymBackground.jpeg')
        }

        .gym-3{
            background-image: url('../images/gymBackground.jpeg')
        }

    </style>


    <section class="container" display: flex;>
        <div class="gymCardHome">
            <div class="gymCardHome-image gym-1"></div>
            <h2>Gym 1</h2>
            <p>This gym is great for beginner lifters</p>
            <a href="gymPage1" >Join Gym 1</a>
        </div>
        
        <div class="gymCardHome">
            <div class="gymCardHome-image gym-2"></div>
            <h2>Gym 2</h2>
            <p>This gym is great for cross-fit athletes looking to improve athletic performance</p>
            <a href="gymPage2" >Join Gym 2</a>

        </div>

        <div class="gymCardHome">
            <div class="gymCardHome-image gym-3"></div>
            <h2>Gym 3</h2>
            <p>This gym is great for body building</p>
            <a href="gymPage3" >Join Gym 3</a>

        </div>
    </section>
    

   
</body>

</html>


@endsection





