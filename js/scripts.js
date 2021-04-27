function myFunction() {
    var x = document.getElementsByTagName("nav");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}