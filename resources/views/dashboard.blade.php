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
                    <li><a href="{{ url('/blog') }}" class="smoothscroll">Blog</a></li>
                    <li class="active"><a href="{{ url('/dashboard') }}" class="smoothscroll">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div id="workwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1>DASHBOARD</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Fun animations! -->
    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
        <div class="row" style="text-align: center;">
            <h1>Lets keep track!</h1><br>

            <!-- Progress bar -->
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40"
                    aria-valuemin="0" aria-valuemax="100" style="width:10%">
                    10%
                </div>
                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:69%;">
                    70% left buddy, don't stop!
                </div>
                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:1%;">
                </div>
            </div>

            <div class="col-lg-2">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_huqzepo1.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                </lottie-player>
            </div>
            <div class="col-lg-2" style="padding-left: 225px;">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_rycdh53q.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                </lottie-player>
            </div>
            <div class="col-lg-2" style="padding-left: 450px;">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_m9zragkd.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                </lottie-player>
            </div>
        </div>
    </div>

    <!-- Table with ECs Data  -->
    <div class="container" style="padding-top: 25px; padding-bottom: 25px;">
        <table class="table text-light">
            <thead>
                <tr>
                    <th scope="col">Quartile</th>
                    <th scope="col">Course</th>
                    <th scope="col">EC</th>
                    <th scope="col">Exam</th>
                    <th scope="col">Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">1</td>
                    <td>Programme and Career Orientation</td>
                    <td>2.5</td>
                    <td>Assesment</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Computer Science Basics</td>
                    <td>5</td>
                    <td>Written Exam</td>
                    <td>-</td>
                </tr>
                <tr class="active">
                    <td>Programming Basics</td>
                    <td>5</td>
                    <td>Case Study Exam</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td rowspan="1">2</td>
                    <td>Object Oriented Programming</td>
                    <td>10</td>
                    <td>Case Study &amp;
                        Project</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td rowspan="2">3</td>
                    <td>Framework Project 1 </td>
                    <td>5</td>
                    <td>C2 Portofolio Exams</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Framework Development 1</td>
                    <td>7.5</td>
                    <td>Case Study</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td rowspan="1">4</td>
                    <td>Framework Project 2 </td>
                    <td>10</td>
                    <td>Portofolio Exam</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td rowspan="2">-</td>
                    <td>Personal Development</td>
                    <td>12.5</td>
                    <td>Portfolio</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>IT personality</td>
                    <td>2.5</td>
                    <td>Portofolio</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
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
