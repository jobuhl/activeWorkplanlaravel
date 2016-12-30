<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>activeWorkplan</title>

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


    <!--Start Sign up-->
    <!-- wird über Button click im header (Sign up) aufgerufen -->
    <div id="signupbutton" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <!-- Modal header-->
                <div class="modal-header">

                    <!-- Close Button oben rechts im Header -->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <!-- Überschrift -->
                    <h1>Sign up</h1>
                    <br>

                    <!-- Übersicht der Navigation die bei Vorschritt markiert weden -->
                    <nav>
                        <ul class="signup-menu">
                            <li>Basic</li>
                            <li>User</li>
                            <li>Company</li>
                        </ul>
                    </nav>

                    <div id="myProgress">
                        <div id="myBar"></div>
                    </div>

                </div>

                <!-- Modal body-->
                <!-- Basic-->
                <div class="modal-body" id="basic">
                    <form>
                        <p><input id="email1" class="form-control " type="email" placeholder="Email"></p>
                        <p><input id="passw1" class="form-control" type="password" placeholder="Password"></p>
                        <p><input id="passw2" class="form-control" type="password" placeholder="Confirm Password"></p>
                    </form>
                </div>

                <div class="modal-footer footer1">
                    <div class="col-xs-12">
                        <button type="button" class="form-control to-right next-button" ONCLICK="nextStep(2)">Next</button>
                    </div>
                </div>

                <!-- User-->
                <div class="modal-body" id="user">
                    <form>
                        <p><input class="form-control" type="email" placeholder="Surname"></p>
                        <p><input class="form-control" type="password" placeholder="Forname"></p>
                    </form>
                </div>

                <div class="modal-footer footer2">
                    <div class="col-xs-6">
                        <button class=" form-control to-right next-button" type="button" ONCLICK="nextStep(1)">Back</button>
                    </div>
                    <div class="col-xs-6">
                        <button class=" form-control to-right next-button" type="button" ONCLICK="nextStep(3)">Next</button>
                    </div>
                </div>

                <!-- Company-->
                <div class="modal-body" id="company">
                    <form>
                        <h3>Company Details</h3>
                        <p><input class="form-control" type="email" placeholder="Company name"></p>

                        <h3>Company Headquarter Adress</h3>
                        <p><input class="form-control" type="email" placeholder="Street"></p>
                        <p><input class="form-control" type="email" placeholder="Street Nr."></p>
                        <p><input class="form-control" type="email" placeholder="Postcode"></p>
                        <p><input class="form-control" type="email" placeholder="City"></p>
                        <p><input class="form-control" type="email" placeholder="Country"></p>
                    </form>
                </div>

                <!-- Modal footer-->
                <div class="modal-footer footer3">
                    <div class="col-xs-6">
                        <button id="back-button" class="form-control to-right next-button" type="button"
                                ONCLICK="nextStep(2)">Back
                        </button>
                    </div>
                    <div class="col-xs-6">
                        <button class="form-control to-right add-button" data-toggle="modal" data-target="#signupbutton"
                                onclick="signup()">Sign up
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Sign up-->


    <!--Start Sign in-->
    <!-- wird über Button click im header (Sign in) aufgerufen -->
    <div id="signinbutton" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <!-- Modal header-->
                <div class="modal-header">

                    <!-- Close Button oben rechts im Header -->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <!-- Überschrift -->
                    <h1>Sign in</h1>
                    <br>

                    <!-- Übersicht der Navigation die bei Fortschritt markiert weden -->
                </div>

                <!-- Modal body-->
                <!-- Basic-->
                <div class="modal-body">
                    <form>
                        <p><input class="form-control " type="email" placeholder="Email"></p>
                        <p><input class="form-control" type="password" placeholder="Password"></p>
                    </form>
                </div>

                <!-- Modal footer-->
                <div class="modal-footer">
                    <button class="form-control to-right add-button" type="submit" data-toggle="modal" data-dismiss="modal"
                            data-target="#signin2">Sign In
                    </button>
                    <br>
                    <a data-toggle="modal" data-target="#forgotpassword" data-dismiss="modal">Forgot your Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Die Passwort vergessen funktion wird über den Button aufgerufen -->
    <div id="forgotpassword" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <!-- Modal header-->
                <div class="modal-header">

                    <!-- Close Button oben rechts im Header -->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <!-- Überschrift -->
                    <h1>Forgot your Password</h1>
                    <br>

                    <p>We will send a new password to your E-Mail Adress</p>
                    <!-- Übersicht der Navigation die bei Vorschritt markiert weden -->

                </div>

                <!-- Modal body-->
                <!-- Basic-->
                <div class="modal-body">
                    <form>
                        <p><input class="inputmodal" type="email" placeholder="Email..."></p>
                    </form>
                </div>

                <!-- Modal footer-->
                <div class="modal-footer">
                    <button class="form-control to-right next-button" data-toggle="modal" data-target="#forgotpassword"
                            onclick="forgotPassword()">Send
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="signin2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-ueberschrift">Choose Account</h2>
                </div>
                <!-- Modal body-->
                <!-- Basic-->
                <div class="modal-body">
                    <a href="../employer/overview.php"> klick for Employer/Admin Webside</a>
                    <br>
                    <br>
                    <a href="../employee/workplan.php"> klick for Employee/User Webside</a>
                </div>
                <!-- Modal footer-->
            </div>
        </div>
    </div>
    <!--end


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

