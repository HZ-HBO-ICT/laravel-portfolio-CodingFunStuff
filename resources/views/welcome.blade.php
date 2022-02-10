<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <body class="antialiased">
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
                    <li class="active"><a href="{{ url('') }}">Home</a></li>
                    <li><a href="{{ url('/profile') }}" class="smoothscroll">Profile</a></li>
                    <li><a href="{{ url('/faq') }}" class="smoothscroll">Faq</a></li>
                    <li><a href="{{ url('/blog') }}" class="smoothscroll">Blog</a></li>
                    <li><a href="{{ url('/dashboard') }}" class="smoothscroll">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1>HOME</h1>
                    <h4>Welcome everyone!</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="row">
            <div class="col-lg-6">
                <h1>HBO-ICT?</h1>
                <p>Hello there, I'm Nikola and why did I choose <a href="https://hz.nl/en/study-programmes/it"
                                                                   style="color: pink;" target="_blank" class="link">HBO-ICT</a>?</p>
                <p>I've always liked to work with computers, I mean litteraly anything that had to do with it I was
                    interested in.
                    I thought that if I wanted to continue to learn new things, HBO-ICT was the best option. From
                    programming to data science and more.
                    This was the best choice if I were to compare them to the others. So HZ was the way to go, and now
                    I'm here!
                </p>
            </div>
            <div class="col-lg-2">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_nApXIX.json" background="transparent"
                               speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
            </div>
            <div class="col-lg-2">
                <img src="img/HZ.png" style="width: 400px; padding-left: 60px;">
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
    </body>
</html>
