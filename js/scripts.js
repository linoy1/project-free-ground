function responsiveNav() {
    var x = document.getElementsById("myTopnav");
    if (x.className === "top_nav") {
        x.className += " responsive";
    } else {
        x.className = "top_nav";
    }
}