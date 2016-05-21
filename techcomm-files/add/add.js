

var timeoutID;
var switchTimeoutID;
var open = false;


$(".tc-dropdown-target").each(function() {

    var dropdown = $( this ).attr("dropdown-div");


    function openDivWithAnimation() {
        $(dropdown).addClass("show", 500, "linear");
        open = true;
    }
    function switchDiv() {
        $(".show").removeClass("show");
        $(dropdown).addClass( "show");
    }
    function closeDivWithAnimation() {
        $(".show").removeClass("show", 500, "linear");
        open = false;
    }


    $( this ).mouseenter(function() {
        window.clearTimeout(timeoutID);
        if (!open) {
            timeoutID = window.setTimeout(openDivWithAnimation, 500);
        } else {
            timeoutID = window.setTimeout(switchDiv, 500);
        }
    });
    $( this ).mouseleave(function() {
        window.clearTimeout(timeoutID);
        timeoutID = window.setTimeout(closeDivWithAnimation, 500);
    });

    $( dropdown ).mouseenter(function() {
        window.clearTimeout(timeoutID);
    });
    $( dropdown ).mouseleave(function() {
        window.clearTimeout(timeoutID);
        timeoutID = window.setTimeout(closeDivWithAnimation, 500);
    });

});