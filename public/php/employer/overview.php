<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Page name -->
    <title>activeWorkplan/Overview</title>

</head>

<body>

<!-- header -->
<?php
include 'header-employer.php';
?>


<section class="fake-body container">
    <h2 style="display: none">fakeheading</h2>


    <aside class="col-xs-12 overview navigation">
        <nav class="calendar-navigation">
            <div class="col-xs-12 col-md-3 calendar-navigation-padding">
                <button id="overview-list" onclick="overviewList()"><span class="glyphicon glyphicon-th-list"></span>
                </button>
                <button id="overview-kachel" onclick="overviewKachel()">
                    <span class="glyphicon glyphicon-th-large"></span></button>
            </div>

            <div class="col-xs-12 col-md-9 calendar-navigation-padding">
                <aside class="col-xs-4 navigation-today">
                    <button>&lt;</button>
                    <button>Today</button>
                    <button> ></button>
                </aside>

                <aside class="col-xs-4">
                    <h4>Workplans</h4>
                </aside>
                <aside class="col-xs-4">
                    <p>01. - 07. Jan. 2018</p>
                </aside>
            </div>
        </nav>
        <br>
    </aside>


    <aside class="col-xs-12 col-sm-3 side-bar overview">

        <ul>
            <li><p>All Stores</p></li>
            <li><input type="text" placeholder="Search Store..."></li>
            <li><a>0001 Store Konstanz</a></li>
            <li><a>0002 Store München</a></li>
            <li><a>0003 Store Freiburg</a></li>
            <li><a>0004 Store Stuttgart</a></li>
        </ul>

        <br>

    </aside>


    <aside id="aside-overview" class="col-xs-12 col-sm-9 my-right-side overview list">

        <aside class="col-xs-12">
            <p class="table-head-store">0001 Store Konstanz
                <button type="button" class="btn btn-default btn-sm" onclick="sendEmail()">
                    <span class="glyphicon glyphicon-envelope"></span> E-Mail
                </button>
                <button type="button" class="btn btn-default btn-sm" onclick="printing()">
                    <span class="glyphicon glyphicon-print"></span> Print
                </button>
            </p>
            <table class="table-calendar">
                <tr>
                    <th></th>
                    <th></th>
                    <th>01.01</th>
                    <th>02.01</th>
                    <th>03.01</th>
                    <th>04.01</th>
                    <th>05.01</th>
                    <th>06.01</th>
                    <th>07.01</th>
                </tr>


                <tr>
                    <th>Employees</th>
                    <th>Time</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                    <th>Su</th>
                </tr>

                <tr>
                    <td>Tim Bohnert</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Maria Schuster</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Michael Ebert</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Trudi Haller</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Dario Koller</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Hirte Stempel</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Marco Speicher</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
            <br>
        </aside>


        <aside class="col-xs-12">
            <p class="table-head-store">0002 Store München
                <button type="button" class="btn btn-default btn-sm" onclick="sendEmail()">
                    <span class="glyphicon glyphicon-envelope"></span> E-Mail
                </button>
                <button type="button" class="btn btn-default btn-sm" onclick="printing()">
                    <span class="glyphicon glyphicon-print"></span> Print
                </button>
            </p>
            <table class="table-calendar">
                <tr>
                    <th></th>
                    <th></th>
                    <th>01.01</th>
                    <th>02.01</th>
                    <th>03.01</th>
                    <th>04.01</th>
                    <th>05.01</th>
                    <th>06.01</th>
                    <th>07.01</th>
                </tr>


                <tr>
                    <th>Employees</th>
                    <th>Time</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                    <th>Su</th>
                </tr>

                <tr>
                    <td>Jan Ebert</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Melanie Holz</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Günther Illner</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Gertrud Miller</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Frederik Hase</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Gustav Vollmann</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Elise Neufeld</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Danny Mehring</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


            </table>
            <br>
        </aside>

        <aside class="col-xs-12">
            <p class="table-head-store">0003 Store Freiburg
                <button type="button" class="btn btn-default btn-sm" onclick="sendEmail()">
                    <span class="glyphicon glyphicon-envelope"></span> E-Mail
                </button>
                <button type="button" class="btn btn-default btn-sm" onclick="printing()">
                    <span class="glyphicon glyphicon-print"></span> Print
                </button>
            </p>
            <table class="table-calendar">
                <tr>
                    <th></th>
                    <th></th>
                    <th>01.01</th>
                    <th>02.01</th>
                    <th>03.01</th>
                    <th>04.01</th>
                    <th>05.01</th>
                    <th>06.01</th>
                    <th>07.01</th>
                </tr>


                <tr>
                    <th>Employees</th>
                    <th>Time</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                    <th>Su</th>
                </tr>

                <tr>
                    <td>Dana Müller</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Dejan Himmel</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Kim Fulldorf</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Giselle Münster</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Lisa Haga</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Ella Fassel</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Ulrich Neuer</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


            </table>
            <br>
        </aside>

        <aside class="col-xs-12">
            <p class="table-head-store">0004 Store Stuttgart
                <button type="button" class="btn btn-default btn-sm" onclick="sendEmail()">
                    <span class="glyphicon glyphicon-envelope"></span> E-Mail
                </button>
                <button type="button" class="btn btn-default btn-sm" onclick="printing()">
                    <span class="glyphicon glyphicon-print"></span> Print
                </button>
            </p>
            <table class="table-calendar">
                <tr>
                    <th></th>
                    <th></th>
                    <th>01.01</th>
                    <th>02.01</th>
                    <th>03.01</th>
                    <th>04.01</th>
                    <th>05.01</th>
                    <th>06.01</th>
                    <th>07.01</th>
                </tr>


                <tr>
                    <th>Employees</th>
                    <th>Time</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                    <th>Su</th>
                </tr>

                <tr>
                    <td>Izmir Gundelach</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Michelle Engel</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Lukas Hirte</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Dieter Krug</td>
                    <td>start</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Gerhart Winter</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Nadja Simm</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Karolin Hummel</td>
                    <td>start</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>end</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


            </table>
            <br>
        </aside>

    </aside>

</section>

<!-- footer -->
<?php
include '../employer/footer-employer.php';
?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../../css/global/table-calendar.css">
<link rel="stylesheet" type="text/css" href="../../css/global/side-bar.css">
<link rel="stylesheet" type="text/css" href="../../css/global/table-calendar-navigation.css">

<!-- JavaScript -->
<script src="../../js/general/side-bar.js"></script>
<script src="../../js/employer/overview.js"></script>
<script src="../../js/employee/workplan.js"></script>

</body>

</html>