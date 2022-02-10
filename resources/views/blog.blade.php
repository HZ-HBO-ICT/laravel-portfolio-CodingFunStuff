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
                    <li><a href="{{ url('/profile') }}">Profile</a></li>
                    <li><a href="{{ url('/faq') }}" class="smoothscroll">Faq</a></li>
                    <li class="active"><a href="{{ url('/blog') }}" class="smoothscroll">Blog</a></li>
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
                    <h1>BLOG</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards for the BLOG -->
    <div class="container" style="padding-top: 40px; padding-bottom: 40px;">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="https://medium.com/@cr7niki/study-choice-activities-e1c2ecddcd50" target="_blank">
                            <div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
                                <center><i class="fa fa-graduation-cap" style="color:#BB7824"></i></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Study choice activities
                                    <div class="pull-right badge"></div>
                                </h4>
                                <p>Read more..</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="https://medium.com/@cr7niki/swot-analysis-2c10fbcca10b" target="_blank">
                            <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
                                <center><i class="fa fa-area-chart" style="color:#16A085"></i></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>SWOT Analysis
                                    <div class="pull-right badge" id="WrControls"></div>
                                </h4>
                                <p>Read more..</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="https://medium.com/@cr7niki/programming-experience-625a2dc26d4" target="_blank">
                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
                                <center><i class="fa fa-laptop" style="color:#d50f25"> </i></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Programming experience
                                    <div class="pull-right badge" id="WrForms"></div>
                                </h4>
                                <p>Read more..</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="https://medium.com/@cr7niki/first-feedback-on-my-website-7121c8b3f0e5" target="_blank">
                            <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                                <center><i class="fa fa-commenting" style="color:#fabc09"> </i></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>First Feedback
                                    <div class="pull-right badge" id="WrInformation"></div>
                                </h4>
                                <p>Read more..</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="https://medium.com/@cr7niki/bitcoin-el-salvadors-grand-experiment-c878cd76260d" target="_blank">
                            <div class="wrimagecard-topimage_header" style="background-color: rgba(130, 93, 9, 0.1)">
                                <center><i class="fa fa-book" style="color:#825d09"></i></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Article
                                    <div class="pull-right badge" id="WrThemesIcons"></div>
                                </h4>
                                <p>Read more..</p>
                            </div>
                        </a>
                    </div>
                </div>
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
