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
                    <li class="active"><a href="{{ url('/faq') }}" class="smoothscroll">Faq</a></li>
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
                    <h1>FAQ</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Collapse with FAQ questions  -->
    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="panel-group" id="accordion">
            @foreach($faqs as $faq)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $faq->id }}">
                            {{$faq->question}}
                        </a>
                    </h4>
                </div>
                <div id="collapse{{ $faq->id }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="card-body">
                            <p class="card-text">
                                {{$faq->answer}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse20">
                            Relevant and useful links to other websites!</a>
                    </h4>
                </div>
                <div id="collapse20" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="card-body">
                            <p class="card-text">
                                <!-- Aside information -->
                            <aside>
                                <div><a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf"
                                        target="_blank">The HZ HBO-ICT Course and Examination Regulations (CER)</a>
                                </div>
                                <div><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
                                        target="_blank">The Implementation Regulations (IR) of the HBO-ICT programme</a>
                                </div>
                                <div><a href="https://www.notion.so/Assignment-Specification-661c5ac5d7494328a58be61d00dd41e4"
                                        target="_blank">Notion envoirement</a></div>
                                <div><a href="https://teams.microsoft.com/_#/school/" target="_blank">The Teams
                                        environment of the study programme</a></div>
                                <div><a href="https://github.com/Nikola-Djukic" target="_blank">My github
                                        environment</a>
                                </div>
                            </aside>
                            </p>
                        </div>
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
