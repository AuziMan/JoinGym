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
                    <div class="gym3Header">    
                        <h1 class="mb-5">This is Gym 3</h1>
                        <h2>This gym is great for athletes and crossfit gym members!</h2>
                        <br>
                        <br>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    


    <style>

        .gym3Header{
            width: 670px;
            height: 200px;
            background-color: #8B8789;
            padding: 10px;
            border-radius: 15px;


        }

        .container{
            display: flex;
            justify-content: center;
        }

        .card {
            background-color: #A4A4A4;
            width: 1200px;
            height: 600px;
            margin: 10px;
            radius: 15px;
        }

        .card-image {
            height: 950px;
            margin-bottom: -15px;
            background-size: 700px;

        }

        .card h2 {
            padding: 10px;
            text-align: center;
        }
        
        .card p {
            padding: 10px;
            text-align: center;
        }

        .card h2, p{
            font-size: 35px;
            color: #F55C57

        }

        .card a {
            padding: 10px;
            background-color: #041137;
            color: white;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 50px 50px;
            text-decoration: none;
        }

        .card:hover{
            background-color: rgb(62,62,62);
            color: white;
            curor: pointer;
            transform:scale(1.03);
            transition: all 1.7s ease;
        }

        .homeLink{
            margin-right: 600px;
        }

        .viewMembers{
            margin-left: 800px;
        }

        .bottomButtons a{
            float: left;
            font-size: 14px;
          

        }

        .textContainer{
            z-index: auto;
            background: white;
            margin: -15px 105px;
            border-radius: 15px;

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


    <section class="container" display: flex;>
        <div class="card">
            <div class="card-image gym-3"></div>
            <div class="textContainer">
                <h2>Info about Gym 3</h2>
                <p>This gym is great for intermediate to advanced lifters</p>
            </div>
            <ul class="bottomButtons">
                <div class="homeLink">
                    <a href="home" >Find another Gym</a>
                </div>
                <div class="viewMembers">
                    <a href="home" >Join Gym!</a>
                </div>
            </ul>
        </div>
        
    </section>
    

   
</body>

</html>


@endsection





