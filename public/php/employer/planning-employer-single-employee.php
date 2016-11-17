<!DOCTYPE html>
<html lang="en">
<head>




    <!-- Page name -->
    <title>activeWorkplan/Planning</title>

</head>

<body>

<!-- header -->
<?php
include 'header-employer.php';
?>

<section class="fake-body container">
    <h2 style="display:none ">fake</h2>

    <br>
    <aside class="col-xs-12 col-sm-3 side-bar">

        <?php
        include 'sidebar.php';
        ?>

    </aside>


    <aside class="col-xs-12 col-sm-9 my-right-side">

        <h2>Maria Schuster</h2>

        <nav class="calendar-navigation">
            <div class="calendar-navigation-padding">
                <div class="navigation-today">
                    <button>&lt;</button>
                    <button>Today</button>
                    <button>></button>
                </div>

                <p>01. - 07. Jan. 2018</p>
            </div>

        </nav>


        <br>

        <p class="table-head-store">Individual proposals of Employees</p>
        <table class="table-calendar table-week-listed-single">
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
                <td>Maria Schuster</td>
                <td>All-day</td>
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

        <button class="form-control to-right yellow" type="submit" data-toggle="modal" data-target="#change-button-emp-2">
            Change
        </button>

        <table class="table-account">
            <tr>
                <td>Employer ID</td>
                <td>7928752</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>********</td>
            </tr>

            <tr class="table-space">
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>Surname</td>
                <td>Schuster</td>
            </tr>
            <tr>
                <td>Forename</td>
                <td>Maria</td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>maria.schuster@html.de</td>
            </tr>

            <tr class="table-space">
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>Period of Agreement</td>
                <td>unlimitted</td>
            </tr>
            <tr>
                <td>Role</td>
                <td>Cashier</td>
            </tr>
            <tr>
                <td>Classification</td>
                <td>Full-Time</td>
            </tr>
            <tr>
                <td>Agreement working hours</td>
                <td>40</td>
            </tr>

            <tr class="table-space">
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>Company name</td>
                <td>HTWG</td>
            </tr>
            <tr>
                <td>Preferred Retail Store</td>
                <td>Konstanz</td>
            </tr>
            <tr>
                <td>Address Retail Store</td>
                <td>Brauneggerstraße 55, 78462 Konstanz</td>
            </tr>


        </table>

        <button class="form-control to-right red" type="submit" data-toggle="modal" data-target="#delete-button-emp-2">
            Delete
        </button>


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
<link rel="stylesheet" type="text/css" href="../../css/global/table-account.css">


<!-- JavaScript -->
<script src="../../js/general/side-bar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

</body>

</html>

