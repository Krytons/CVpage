<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CVpage</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
    <link href="{{ asset('css/section.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
</head>

<body id="start">

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#start">
        <span class="d-block d-lg-none">Bartolomeo Caruso</span>
        <span class="d-none d-lg-block">
            <img class="img-fluid img-profile mx-auto mb-2" src="{{ asset('images/Me.jpg') }}"  alt="">
        </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#timeline">Timeline</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
            </li>
        </ul>
        </div>
    </nav>

        <!-- Page Content -->
        <div id="content">
            <div class="container">

                 <!-- ABOUT ME -->
                <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
                <div class="w-100">
                    <h1 class="mb-0">Bartolomeo
                    <span class="text-primary">Caruso</span>
                    </h1>
                    <div class="subheading mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor: 
                    <a href="mailto:Loremipsum@email.com"> Loremipsum@email.com</a>
                    </div>
                    <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.</p>
                    <div id="listsocial">Contact me: 
                        <ul class="list-inline social-icons ml-1">
                            <li class="list-inline-item">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-github"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-twitter"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-facebook"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                </section>

                <!-- TIMELINE -->
                <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="timeline">
                <div class="row w-100">
                    <div class="col-md-12">
                        <div class="main-timeline4">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="year">2015-03</span>
                                    <div class="inner-content">
                                        <h3 class="title">Web Designer</h3>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="year">2016</span>
                                    <div class="inner-content">
                                        <h3 class="title">Web Developer</h3>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="year">2017</span>
                                    <div class="inner-content">
                                        <h3 class="title">Web Designer</h3>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="year">2018</span>
                                    <div class="inner-content">
                                        <h3 class="title">Web Developer</h3>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="year">2019</span>
                                    <div class="inner-content">
                                        <h3 class="title">Web Developer</h3>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="year">2020</span>
                                    <div class="inner-content">
                                        <h3 class="title">Web Developer</h3>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

                <hr class="m-0">

                <!-- SKILLS -->
                <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
                <div class="row w-100" id="prglng">
                    <div>PROGRAMMING LANGUAGES: 
                        <ul class="list-inline dev-icons" id="listprg">
                            <li class="list-inline-item">
                                <i class="fab fa-html5"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-css3-alt"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-js-square"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-angular"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-node-js"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-npm"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-java"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                </section>
                
            </div> <!-- end Container -->
        </div>
</body>


 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</html>