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
        <div class="container">
            <div class="row">
                <div class="col-xl-15 mx-auto position-relative">
                    <div class="gym1Header">    
                        <h1 class="mb-5">Gym 1 || Beginners Gym</h1>
                        
                        <br>
                        <br>
                    </div>
                    <br>
                </div>
                
            </div>
        </div>
    </header>
    


    <style>

        .gym1Header{
            width: 400px;
            height: 100px;
            background-color: #353535;
            padding: 25px;
            border-radius: 15px;
        }

        .container{
            display: flex;
            justify-content: center;
            font-family: 'Oswald', sans-serif;
        }

        .card {
            width: 1200px;
            height: 600px;
            radius: 15px;    
        }

        .card-image {
            height: 550px;
            margin-bottom: -35px;
            background-size: cover;

        }

        .card h2 {
            padding: 10px;
            text-align: center;
            font-size: 40px;
        }
        
        .card p{
            font-size: 35px;
            color: #F55C57;
            text-align: center;
        }

        .card h3 {
            text-align: center;
            font-size: 23px;
            color: #F55C57;
            padding: 15px;
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
            font-size: 19px;
            background: #F55C57;
        }

        .textContainer{
            z-index: auto;
            background: white;
            margin: 100px 105px;
            border-radius: 15px;
            height: 190px;
        }

        .gym-1 {
            background-image: url('../images/gymBackground.jpeg')
        }

        

    </style>


    <section class="container" display: flex;>
        <div class="card">
            <div class="card-image gym-1">
                <div class="textContainer">
                    <h2>Info about Gym 1 || Beginners</h2>
                    <h3>
                        The Beginner Gym is a great sub-gym for individuals with little gym experience but eager to start their fitness journey. 
                                The majority of members are beginning their gym jounry with a few experienced members sprinkled in 
                    </h3>
                </div>
                <ul class="bottomButtons">
                    <div class="homeLink">
                        <a href="home" >Find another Gym</a>
                    </div>
                    <div class="viewMembers">
                        <a href="gym1UserPage" >Join Gym!</a>
                    </div>
                </ul>
            </div>
        </div>
        
    </section>
    

   
</body>

</html>


@endsection





