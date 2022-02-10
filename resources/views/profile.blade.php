<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HZ Portfolio - Nikola Djukic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ url('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

    <!-- Jquery.min.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('') }}">NIKOLA DJUKIC</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li class="active"><a href="{{ url('/profile') }}">Profile</a></li>
                    <li><a href="{{ url('/faq') }}" class="smoothscroll">Faq</a></li>
                    <li><a href="{{ url('/blog') }}" class="smoothscroll">Blog</a></li>
                    <li><a href="{{ url('/dashboard') }}" class="smoothscroll">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div id="workwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1>PROFILE</h1>
                    <h4>STUDENT AND DEVELOPER</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 50px;">
        <div class="row">
            <div class="col-lg-6">
                <h2>About Me</h2>

                <p>Hello there! I'm Nikola Djukic, 20 years of age, and I'm currently a 1st year HBO-ICT student at HZ,
                    University of Applied sciences! </p>

                <p>I'm not a super interesting individual, but I'll try to say a few words about myself. Lets start with
                    something simple, Music. I'm the type that can listen to literaly ANYTHING. And I mean it.
                    From classical music to country to Kanye West and so on.

                <p>Next up, Gaming. Yeah, gaming was a huge part of my life, probably one of the main reasons why I was
                    fat. But besides me being fat, from having fun
                    with my friends to me making money from games at the age of 13 was something I liked very much. </p>

                <p>Next up is, Fitness. Yeah yeah weightlifting was/is part of my life as well. Me being a little fatty,
                    yeah nah, It was time to change that up a bit, so I started going to the local gym at the age of 17,
                    learned a few things here and there, had fun, lost weight, got fat, lost weight again, and so on.
                    Either way, a fun experience, met a lot of people as well. No regrets so far!</p>
                </p><br>
                <p> <button type="button" class="btn btn-info">Few characteristics:</button>
                    <button type="button" class="btn btn-default">Studious</button>
                    <button type="button" class="btn btn-default">Inventive</button>
                    <button type="button" class="btn btn-default">Ambitious</button>
                    <button type="button" class="btn btn-default">Energetic</button>
                </p>
            </div>
            <div class="col-lg-2">
                <img src="{{ url('img/MeMyself.jpg') }}" style="width: 500px; padding-top: 20px; padding-bottom: 20px;">
            </div>
        </div>

        <div class="row centered mt mb">
            <h1 style="padding-bottom: 20px;"> A few things things I've worked with! </h1>

            <div class="col-lg-2 col-md-2 col-sm-2 gallery">
                <a href="https://en.wikipedia.org/wiki/HTML5" target="_blank"><img src="{{ url('img/portfolio/HTML5.png') }}"
                        class="img-responsive"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 gallery">
                <a href="https://en.wikipedia.org/wiki/Java_(programming_language)" target="_blank"><img
                        src="{{ url('img/portfolio/JavaRealPng.png') }}" class="img-responsive"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 gallery">
                <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank"><img
                        src="{{ url('img/portfolio/Javascript.jpg') }}" class="img-responsive"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 gallery">
                <a href="https://kotlinlang.org/" target="_blank"><img src="{{ url('img/portfolio/Kotlin.png') }}"
                        class="img-responsive"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 gallery">
                <a href="https://www.mysql.com/" target="_blank"><img src="{{ url('img/portfolio/MysqlLogo.png') }}"
                        class="img-responsive"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 gallery">
                <a href="https://www.php.net/" target="_blank"><img src="{{ url(' img/portfolio/PHPpngLogo.png') }}"
                        class="img-responsive"></a>
            </div>
        </div>
    </div>

    <!-- Socials -->
    <div id="social">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-3">
                    <a href="https://www.facebook.com/nikola.djukic3/" target="_blank"><i
                            class="fa fa-facebook"></i></a>
                </div>
                <div class="col-lg-3">
                    <a href="https://twitter.com/YeBoiiiSugarNik" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="col-lg-3">
                    <a href="https://www.linkedin.com/in/nikola-djukic-hz/" target="_blank"><i
                            class="fa fa-linkedin"></i></a>
                </div>
                <div class="col-lg-3">
                    <a href="https://www.instagram.com/nicholas_fwi/" target="_blank"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div id="copyrights">
        <div class="container">
            <p>
                &copy; Copyrights <strong>Nikola Djukic</strong>. All Rights Reserved
            </p>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ url('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('lib/easing/easing.min.js') }}"></script>

    <!-- Javascript File -->
    <script src="{{ url('js/main.js') }}"></script>
</body>

</html>
