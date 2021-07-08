window.onload = (event) => {
    filterSelection("all")
    var btns = document.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", " md-inactive");
            this.className = this.className.replace(" md-inactive", " active");
        });
    }
}

function responsiveNav() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
    }
}

// Show filtered elements
function AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// const dbParam = JSON.stringify({ table: "category", limit: 5 });
// const xmlhttp = new XMLHttpRequest();
// xmlhttp.onload = function() {
//     myObj = JSON.parse(this.responseText);
//     let text = "<table border='1'>"
//     for (let x in myObj) {
//         text += "<tr><td>" + myObj[x].name + "</td></tr>";
//     }
//     txt += "</table>"
//     document.getElementById("demo").innerHTML = txt;
// }
// xmlhttp.open("POST", "find.php");
// xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// xmlhttp.send("x=" + dbParam);