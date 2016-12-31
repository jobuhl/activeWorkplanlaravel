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
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required autofocus>

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


                    <!-- Modal footer-->
                    <div class="form-groug modal-footer">
                        <button class="form-control to-right add-button" type="submit"
                        >Sign In
                        </button>
                        <br>

                        <a data-toggle="modal" data-target="#forgotpassword" data-dismiss="modal">Forgot your
                            Password?</a>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            Forgot Your Password?
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!--zum löschen freigegeben nachdem user login funktioniert-->
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

