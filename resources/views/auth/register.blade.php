<!-- Beispiel Code -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                </form>
                    <div class="modal-footer footer1">
                        <div class="col-xs-12">
                            <button type="button" class="form-control to-right next-button" ONCLICK="nextStep(2)">Next</button>
                        </div>
                    </div>

            </div>



            <!-- User-->
            <div class="modal-body" id="user">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Surame</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
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
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <h3>Company Details</h3>
                    <p><input class="form-control" type="email" placeholder="Company name"></p>

                    <h3>Company Headquarter Adress</h3>
                    <p><input class="form-control" type="email" placeholder="Street"></p>
                    <p><input class="form-control" type="email" placeholder="Street Nr."></p>
                    <p><input class="form-control" type="email" placeholder="Postcode"></p>
                    <p><input class="form-control" type="email" placeholder="City"></p>
                    <p><input class="form-control" type="email" placeholder="Country"></p>

                    <div class="modal-footer footer3">
                        <div class="col-xs-6">
                            <button id="back-button" class="form-control to-right next-button" type="button"
                                    ONCLICK="nextStep(2)">Back
                            </button>
                        </div>
                        <div class="col-xs-6">
                        <button id="back-button" class="form-control to-right next-button" type="submit"
                               >SignUp
                        </button>

                        </div>
                    </div>

                </form>
            </div>

            <!-- Modal footer-->

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
                <a href="employer-overview"> click for Employer/Admin Webside</a>
                <br>
                <br>
                <a href="employee-workplan"> click for Employee/User Webside</a>
            </div>
            <!-- Modal footer-->
        </div>
    </div>
</div>
<!--end sign in-->

