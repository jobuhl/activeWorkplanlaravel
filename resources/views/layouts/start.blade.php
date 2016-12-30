<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>activeWorkplan</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/global/header-footer.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/general/signup.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/general/dataprotection.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/global/modal.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>


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
            <li><a id="index" href="welcome">Home</a></li>
            <li><a id="features" href="feature">Features</a></li>
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
            <li><a data-toggle="modal" data-target="#signinbutton">Sign In</a></li>
            <li><a data-toggle="modal" data-target="#signupbutton" onclick="nextStep(1)">Sign Up</a></li>
        </ul>
    </header>

    <section class="space-under-header">
        <h2 class="modal-ueberschrift" style="display: none">fakeheading</h2>
    </section>

    <!-- Modal -->



    @include('auth.register')
    <!--Start Sign up-->
    <!-- wird über Button click im header (Sign up) aufgerufen -->


    @yield('content')

    <footer>
        <ul>
            <!--Link zu Dataprotection-->
            <li><a id="dataprotection" href="protection">Dataprotection</a>
            </li>
            <!--Link zu Impressum-->
            <li><a id="impressum" href="impressum">Impressum</a></li>
            <!--Link zu Contact-->
            <li><a id="contact" href="contact">Contact</a></li>
        </ul>
    </footer>
    <!--end footer-->

    <script type="text/javascript" src="{{ asset('js/general/modal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/general/header-footer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/general/header-footer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/general/signup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/general/general-mainsection.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/employer/modal_add_change_delete.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/general/modal.js') }}"></script>

    </body>

    </html>

