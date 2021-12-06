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
                </div>
                
            </div>
        </div>
    </header>
    <section  class="text-center bg-light features-icons" id="bioSection" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-layers m-auto text-primary"></i></div>
                        <h3>Goals for my Carrer Future</h3>
                        <p class="">For now, I am wanting to gain as much knowlege as possible about the technology industry.<br>
                            Because I enjoy working with people so much, I would eventually want to end up in a project managment position. 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    

                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary"></i></div>
                            <h3>Hobbies</h3>
                            <li>Sports</li>
                            <li>Hiking</li>
                            <li>Coding(duh)</li>
                            <li>Weightlifting</li>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-check m-auto text-primary"></i></div>
                        <h3>About Me</h3>
                        <p class="">
                            I grew up in a small country town in North-east Kansas. Most of my time was spent playing sports or working outside, but since 
                            both my dad and uncle have jobs in the tech industry, the work I saw them do peaked my interest. My freshman year of highschool,
                            I took a basic web design course and this eventually turned into my making websites using basic CSS and HTML.
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <div class="wrapper">
            <div class="cards_wrap">
                <div class="card_item">
                    <div class="card_inner">
                        <div class="card_top">
                            <img src="../images/cardBGunsplash.jpg" alt="cardBG" style="width: 100px;">
                        </div>
                        <div class="card_bottome">
                            <div class="card_catagory">
                                Gyms
                            </div>
                            <div class="card_info">
                                <p class="title">
                                    10 best things bout the gym!
                                </p>
                                <p>Filler text </p>
                            </div>
                            <div class="card_creator">
                                Austin
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_item">
                    <div class="card_inner">
                        <div class="card_top">
                            <img src="../images/cardBGunsplash.jpg" alt="cardBG" style="width: 100px;">
                        </div>
                        <div class="card_bottome">
                            <div class="card_catagory">
                                Gyms
                            </div>
                            <div class="card_info">
                                <p class="title">
                                    10 best things bout the gym!
                                </p>
                                <p>Filler text </p>
                            </div>
                            <div class="card_creator">
                                Austin
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    <div class="row">
    
        <div class="column">
        <img src="../images/hikingPic.png" width="300" height="500" class="center">
        </div>
        <div class="column">
        <img src="../images/soccerpic2.png" width="250" height="200" class="center">
        </div>
        <div class="column">
        <img src="../images/moutainPic.png" width="300" height="500" class="center">
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="column">
        <img src="../images/auziandmatt.png" width="300" height="500" class="center">
        </div>
        <div class="column">
        <img src="../images/auzianddaboys.png" width="250" height="400" class="center">
        </div>
        <div class="column">
        <img src="../images/auziandkyra.png" width="330" height="500" class="center">
        </div>
    </div>



    <br>
    <br>
    <br>
    <header class="text-center text-white masthead">
        <div class="overlay">
            <div class="container"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">A little bit about this Website</h1>
                </div>
                
            </div>
        </div>
    </header>

    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 text-white order-lg-2 showcase-img" ><span></span></div>
                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2>Purpose</h2>
                    <p class="lead mb-0">
                        The original purpose of this website was a job application site (think simpler Linkedin) that was meant to be build in a one semeester course. 
                        This is just a earlier version that I have converted into my own website. This is where I do alot of my self practice for web-dev, as I am 
                        forced to work around a framework. 
                    </p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img"><span></span></div>
                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2>What are my skills and goals?</h2>
                    <p class="lead mb-0">
                        As (hopefully) I have displayed with this site, I have a good amount of experience with front end design using HTML+CSS and currently following a course on youtube
                        teaching JavaScript. I am also knowlegable using PHP, Java, and several C variants. All PHP classes I have taken involved the use of a database, so 
                    </p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white order-lg-2 showcase-img" ><span></span></div>
                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2></h2>
                    <p class="lead mb-0">

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center bg-light testimonials">
        <div class="container">
            <h2 class="mb-5">What I could bring to the Team:</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0">
                        <h5>Ability to learn</h5>
                        <p class="font-weight-light mb-0">My entire life, I've never had a similar job. Ive went from retail, to construction/landscaping, to an IT helpdesk job in around a year.
                            Ive always prided myself in my ability to learn and adapt quickly to new tasks. 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0">
                        <h5></h5>
                        <p class="font-weight-light mb-0">
                        </p>
                    </div>
                </div> 
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0">
                        <h5>Dedication</h5>
                        <p class="font-weight-light mb-0">
                        Becasue I belive the first job in the tech industry can be the most impactful, I am looking forward to learning as much as possible 
                            to building my own personal skills, but to learn how the industry functions as a whole
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="bg-light footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    
                    <p class="text-muted small mb-4 mb-lg-0">© Austin Driver JoinGym 2021. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end my-auto h-100">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>


@endsection





