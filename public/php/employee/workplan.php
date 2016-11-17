<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Page name -->
    <title>activeWorkplan/Workplan</title>
</head>

<body>

<!-- header -->
<?php
include 'header-employee.php';
?>

<section class="fake-body container">
    <h2 style="display: none">fakeheading</h2>

    <article class="col-xs-12 firstrow">
        <button type="button" class="btn btn-default btn-sm" onclick="printing()">
            <span class="glyphicon glyphicon-print"></span> Print
        </button>

        <button type="button" class="btn btn-default btn-sm" onclick="sendEmail()">
            <span class="glyphicon glyphicon-envelope"></span> send to E-Mail
        </button>
    </article>




    <!-- Calender -->
    <div id='calendar'></div>

</section>


<!-- footer -->



<footer>
    <ul>
        <!--Link zu Dataprotection-->
        <li><a id="dataprotection" href="../general/dataprotection.php" onclick="tabHighlight(id)">Dataprotection</a>
        </li>
        <!--Link zu Impressum-->
        <li><a id="impressum" href="../general/impressum.php" onclick="tabHighlight(id)">Impressum</a></li>
        <!--Link zu Contact-->
        <li><a id="contact" href="../general/contact.php" onclick="tabHighlight(id)">Contact</a></li>
    </ul>
</footer>
<!--end footer-->

<!-- Bootstrap / jQuery Imports -->
<?php
include '../general/general-links.php';
?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../../css/global/header-footer.css">

<!-- JavaScript -->
<!-- Header wird erst im Footer geladen, da sonst die Hoehe des fake-body nicht berechnet werden kann und aus performace gruenden -->


<link rel='stylesheet' href='../../calendar/lib/cupertino/jquery-ui.min.css'/>
<link href='../../calendar/fullcalendar.css' rel='stylesheet'/>
<link href='../../calendar/fullcalendar.print.css' rel='stylesheet' media='print'/>
<link href='../../css/employee/planning-employee.css' rel='stylesheet'/>
<link href='../../css/global/side-bar.css' rel='stylesheet'/>


<script src='../../calendar/lib/moment.min.js'></script>
<script src='../../calendar/lib/jquery.min.js'></script>
<script src='../../calendar/lib/jquery-ui.min.js'></script>
<script src='../../calendar/fullcalendar.min.js'></script>
<script src='../../calendar/script.js'></script>


<script>

    var bodyHeight = $(".fake-body").height() + 120; /* 120 wegen header-hoehe plus footer-hoehe */
    var windowHeight = $(window).height();




    alert("window height" + windowHeight + " " + "body height" + bodyHeight);


</script>

</body>

</html>