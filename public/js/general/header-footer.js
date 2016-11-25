/* Beim Laden der Seite Footer ausrichten */
window.onload = fixFooter(), highlightTab();

function highlightTab() {

    /* Pfadname der aktuellen Datei auslesen */
    var url = window.location.pathname;

    /* Nur Dateinamen filtern */
    var filename = url.substring(url.lastIndexOf('/')+1);

    /* nur Dateinamen ohne Endung filtern */
    var tabId = filename.substring(0, filename.length - 4);
    /*alert(tabId);*/

    /* Sonderfall, da die Mitarbeiter Seite im gleichen Tab wie planning ist */
    if(tabId == "planning-employer-single-employee") {
        tabId = "planning-employer";
    }

    /* da die header Listen-IDs gleich benannt sind wie die dateien, kann ich diese exakt ansprechen */
    $('ul li #' + tabId).addClass('myActive');
}

/* Immer wenn Window-Groesse veraendert wird Footer ausrichten */
$('body')[0].onresize = function () {
    /* Wenn bspw. Dropdown menu unten und Fenster wird klein gezogen, soll auch der Content wieder nach oben */
    if ($(window).width() >= 768) {
        changeSectionUnderHeader("up");
    }

    /* Wenn Dropdown eigentlich unten war, fenster breiter wurde und wieder kleiner wird, soll kontent wiedre nach unten */
    if ($(window).width() < 768 && $("#id-right")[0].className === "right-list responsive") {
        changeSectionUnderHeader("down");
    }

    /* Footer neu ausrichten */
    fixFooter()
};

function toggleMakeResponsive() {
    /* ohne ID klappts nicht */
    var rightList = $("#id-right")[0];
    var leftList = $("#id-left")[0];

    /* Wenn Element NUR "right-list Klasse enthaelt, also nicht "responsive" */
    if (rightList.className === "right-list") {

        /* Responsive Class hinzufuegen */
        rightList.className += " responsive";

        /* nicht anzeigen des Placeholders */
        leftList.className += " responsive";

        /* Body quasi runter schieben */
        changeSectionUnderHeader("down");

    } else {
        /* beim zweiten Klick auf den Toggle Dropdown schliessen */
        rightList.className = "right-list";

        /* beim zweiten Klick auf den Toggle Placeholder wieder anzeigen */
        leftList.className = "left-list";

        /* Den Body quasi wieder hoch schieben */
        changeSectionUnderHeader("up");
    }
}

function changeSectionUnderHeader(decision) {

    var amountListElements = 0;

    if (decision == "down") {

        /* berechnet anzahl an li der ul.right-list */
        $('header ul.right-list li').each(function () {
            amountListElements += 1;
        });
    }

    /* Hoehe der Section unterm Header vergroessern / verkleinern */
    $('.space-under-header')[0].style.height = (amountListElements + 1) * 60 + "px";

    /* Erneut abstimmen, ob Body kleiner/groesser Display */
    fixFooter();
}

function fixFooter() {
    /* Hoehe von Body und Window(Display) */
    var bodyHeight = $(".fake-body").height() + 120; /* 120 wegen header-hoehe plus footer-hoehe */
    var windowHeight = $(window).height();
    /*alert("fake-body: " + bodyHeight + "\nwindow     : " + windowHeight + "\nVielleicht Problem mit Bootstrap Klassen (col-xx-xx)");*/

    /* Wenn Window groesser Body */
    if (windowHeight > bodyHeight) {
        /* Footer absolut an den unteren Displayrand setzen */
        $("footer").css("position", "absolute").css("bottom", 0).css("width", "100%");
    } else {
        /* Footer unterhalb des Body-Inhalts anzeigen */
        $("footer").css("position", "relative");
    }
}