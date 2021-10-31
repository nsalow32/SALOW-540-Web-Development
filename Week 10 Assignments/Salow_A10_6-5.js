var topp = "trinkets";

function toTop(newTop){
    domTop = document.getElementById(topp).style;
    domNew = document.getElementById(newTop).style;

    domTop.zIndex = "0";
    domNew.zIndex = "10";
    topp = newTop;

    dom = document.getElementById("trinkets").style;

    if (dom.visibility == "visible")
        dom.visibility - "hidden";
    else
        dom.visibility = "visible";
}