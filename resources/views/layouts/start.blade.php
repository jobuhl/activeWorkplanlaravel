<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/global/header-footer.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/genaral/signup.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/global/modal.css')}}">

    </head>
    <body>
    <header>
        <ul class="left-list" id="id-left">
            <li class="nav-image">
                <a href="index.php">
                    <img class="nav-logo" src="{{asset('gif/imagelogo.gif')}}" alt="Logo">
                </a>
            </li>
            <li class="nav-placeholder">
                <a id="nav-placeholder-text">Home</a>
            </li>
            <li class="nav-toggle">
                <a href="javascript:void(0);" onclick="toggleMakeResponsive()">&#9776;</a>
            </li>
        </ul>
        <ul class="right-list" id="id-right">
            <li><a id="index" href="index.php">Home</a></li>
            <li><a id="features" href="features.php">Features</a></li>
            <li><a data-toggle="modal" data-target="#signinbutton">Sign In</a></li>
            <li><a data-toggle="modal" data-target="#signupbutton" onclick="nextStep(1)">Sign Up</a></li>
        </ul>
    </header>

    <section class="space-under-header">
        <h2 class="modal-ueberschrift" style="display: none">fakeheading</h2>
    </section>


    @yield('content')

    <footer>
        <ul>
            <!--Link zu Dataprotection-->
            <li><a id="dataprotection" href="../general/dataprotection.php">Dataprotection</a>
            </li>
            <!--Link zu Impressum-->
            <li><a id="impressum" href="../general/impressum.php">Impressum</a></li>
            <!--Link zu Contact-->
            <li><a id="contact" href="../general/contact.php">Contact</a></li>
        </ul>
    </footer>
    <!--end footer-->
    <script type="text/javascript" src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"') }}"></script>
    <script type="text/javascript" src="{{ asset('js/general/header-footer.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/general/header-footer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/general/signup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/general/general-mainsection.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/employer/modal_add_change_delete.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/general/modal.js') }}"></script>

    </body>
    </html>

