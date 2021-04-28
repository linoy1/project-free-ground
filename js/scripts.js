function responsiveNav() {
    var x = document.getElementsById("top_nav");
    if (x.className === "top_nav") {
        x.className += " responsive";
    } else {
        x.className = "top_nav";
    }
}