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
                    <div class="gym2Header">    
                        <h1 class="mb-5">This is Gym 2</h1>
                        <h2>This gym is great for beginner gym members that are excited about starting their fitess jouney</h2>
                        <br>
                        <br>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    


    <style>

        .gym2Header{
            width: 670px;
            background-color: #041137;
            padding: 15px;

        }

        .container{
            display: flex;
            justify-content: center;
        }

        .card {
            background-color: white;
            width: 900px;
            height: 600px;
            margin: 10px;
            sradius: 15px;
        }

        .card-image {
            height: 950px;
            margin-bottom: 15px;
            background-size: 700px;
            border-radius: 15px 15px 0 0;

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
            transition: all 0.7s ease;
        }

        .homeLink{
            margin-right: 600px;
        }

        .viewMembers{
            margin-left: 600px;
        }

        .bottomButtons a{
            float: left;
            font-size: 14px;
          

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
            <h2>Info about Gym 2</h2>
            <p>This gym is great for intermediate to advanced lifters</p>
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




