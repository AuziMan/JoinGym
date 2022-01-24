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

        .card {
            background-color: white;
            width: 300px;
            height: 400px;
            margin: 10px;
            border-radius: 15px;
        }

        .card-image {
            height: 150px;
            margin-bottom: 15px;
            background-size: cover;
            border-radius: 15px 15px 0 0;

        }

        .card h2 {
            padding: 10px;
        }
        
        .card p {
            padding: 10px;
        }

        .card a {
            padding: 10px;
            background-color: #041137;
            color: white;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 20px 50px;
            text-decoration: none;
        }

        .card:hover{
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
        <div class="card">
            <div class="card-image gym-1"></div>
            <h2>Gym 1</h2>
            <p>This gym is great for beginner lifters</p>
            <a href="gymPage1" >Join Gym 1</a>
        </div>
        <div class="card">
            <div class="card-image gym-2"></div>
            <h2>Gym 2</h2>
            <p>This gym is great for cross-fit lifters or athletes looking to improve athletic performance</p>
            <a href="" >Join Gym 2</a>

        </div>
        <div class="card">
            <div class="card-image gym-3"></div>
            <h2>Gym 3</h2>
            <p>This gym is great for body building</p>
            <a href="" >Join Gym 3</a>

        </div>
    </section>
    

   
</body>

</html>


@endsection





