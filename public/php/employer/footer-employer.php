<!DOCTYPE html>
<html lang="en">

<head>
    <title>Footer</title>
</head>

<body>

<!--Start footer-->
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

<!-- CSS für alle Employer-Classen-->
<link rel="stylesheet" type="text/css" href="../../css/global/header-footer.css">
<link rel="stylesheet" type="text/css" href="../../css/global/modal.css">

<!-- JavaScript für alle Employer Classen -->
<!-- Header wird erst im Footer geladen, da sonst die Hoehe des fake-body nicht berechnet werden kann und aus performace gruenden -->
<script src="../../js/general/header-footer.js"></script>

</body>

</html>
