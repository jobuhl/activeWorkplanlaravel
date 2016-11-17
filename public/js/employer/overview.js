function overviewKachel() {
    /* right-aside auf volle breite setzen */
    $(".overview.my-right-side").removeClass("col-sm-9 list");
    $(".overview.my-right-side").addClass("col-sm-12 kachel");

    /* workplans auf halbe Seite-breite bringen */
    $(".overview.my-right-side aside").removeClass("col-xs-12");
    $(".overview.my-right-side aside").addClass("col-xs-12 col-md-6");

    /* Side-Bar ausblenden */
    $(".overview.side-bar").css("display", "none");

    /* Trennlinie zwischen side-bar und right-aside ausblenden */
    $(".overview.my-right-side").css("border", "none");
    $(".overview.side-bar").css("border", "none");

}

function overviewList() {
    /* right-aside wieder zurueck auf 9/12 breite */
    $(".overview.my-right-side").removeClass("col-sm-12 kachel");
    $(".overview.my-right-side").addClass("col-sm-9 list");

    /* workplans wieder auf volle Seite-breite bringen */
    $(".overview.my-right-side aside").removeClass("col-xs-12 col-md-6");
    $(".overview.my-right-side aside").addClass("col-xs-12");

    /* Side-bar wieder einblenden */
    $(".overview.side-bar").css("display", "block");

    /* Trennlinie zwischen side-bar und right-aside wieder einblenden */
    sideBarBorder();
}

/* der externe Aufruf des Click-Button funktioniert nicht *//*
$("#overview-kachel").addEventListener("click", overviewKachel());
$("#overview-list").addEventListener("click", overviewList());
document.getElementById("overview-kachel").onclick = function() { overviewKachel() };
document.getElementById("overview-list").onclick = function() { overviewList() };
*/
