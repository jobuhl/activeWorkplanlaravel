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

            <!--<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">-->
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminStore') }}">

                {{ csrf_field() }}
                <div class="modal-body">

                    <!-- Basic-->
                    <div id="basic">
                        <!-- email-->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}"
                                       required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- email-ende -->

                        <!-- password1-->
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
                        <!-- password1 ende-->

                        <!-- password2-->
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div id="basic" class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>
                        <!-- password1 ende-->


                        <div class="modal-footer footer1">
                            <div class="col-xs-12">
                                <button type="button" class="form-control to-right next-button" ONCLICK="nextStep(2)">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- User-->
                    <div id="user">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Forename</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="forename" value="{{ old('name') }}"
                                       required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="surname" value="{{ old('name') }}"
                                       required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer footer2">
                            <div class="col-xs-6">
                                <button class=" form-control to-right next-button" type="button" ONCLICK="nextStep(1)">
                                    Back
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <button class=" form-control to-right next-button" type="button" ONCLICK="nextStep(3)">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Company-->
                    <div id="company">
                        <h3>Company Details</h3>
                        <p><input class="form-control" type="email" name="company-name" placeholder="Company name"></p>

                        <h3>Company Headquarter Adress</h3>
                        <p><input class="form-control" type="email" name="street" placeholder="Street"></p>
                        <p><input class="form-control" type="email" name="street_nr" placeholder="Street Nr."></p>
                        <p><input class="form-control" type="email" name="postcode" placeholder="Postcode"></p>
                        <p><input class="form-control" type="email" name="city" placeholder="City"></p>
                        <p><input class="form-control" type="email" name="country" placeholder="Country"></p>

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
                    </div>
                </div>
            </form>
        </div>

        <!-- Modal footer-->

    </div>
</div>
<!--End Sign up-->

