@extends('layouts.app')

@section('content')



<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Home - Brand</title>
</head>

<body> 
    <header class="text-center text-white masthead" style="background: url('bg-masthead.jpg')no-repeat center center;background-size: cover;">
        <div class="overlay">
            <div class="container"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">A little bit about me and this website...</h1>
                </div>
                
            </div>
        </div>
    </header>
    <section class="text-center bg-light features-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-6 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary"></i></div>
                        <h3>Hobbies</h3>
                        <br>
                        <ul>
                            <li>Working out</li>
                            <li>Building Websites</li>
                            <li>hanging with friends</li>
                            <li>Sports</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-layers m-auto text-primary"></i></div>
                        <h3>Bootstrap 4 Ready</h3>
                        <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-check m-auto text-primary"></i></div>
                        <h3>Easy to Use</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 text-white order-lg-2 showcase-img" style="background-image:url('bg-showcase-1.jpg');"><span></span></div>
                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2>Fully Responsive Design</h2>
                    <p class="lead mb-0">When you use a theme created with Bootstrap, you know that the theme will look great on any device, whether it&#39;s a phone, tablet, or desktop the page will behave responsively!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image:url('bg-showcase-2.jpg');"><span></span></div>
                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2>Updated For Bootstrap 4</h2>
                    <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes are now using Bootstrap 4!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white order-lg-2 showcase-img" style="background-image:url('bg-showcase-3.jpg');"><span></span></div>
                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2>Easy to Use &amp; Customize</h2>
                    <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center bg-light testimonials">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="testimonials-1.jpg" />
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">&quot;This is fantastic! Thanks so much guys!&quot;</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="testimonials-2.jpg" />
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">&quot;Bootstrap is amazing. I&#39;ve been using it to create lots of super nice landing pages.&quot;</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="testimonials-3.jpg" />
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">&quot;Thanks so much for making these free resources available to us!&quot;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center text-white call-to-action" style="background:url('bg-masthead.jpg') no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input type="email" class="form-control form-control-lg" placeholder="Enter your email..." /></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-lg" type="submit">Sign up!</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-light footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Terms of  Use</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">© Brand 2021. All Rights Reserved.</p>
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





