function
switch () {
    var div1 = document.getElementById("high-width");
    var dvi2 = document.getElementById("low-width");

    if (x <= window.matchMedia("(max-width: 550px)")) {
        div1.style.display = "none";
        div2.style.display = "block";
    } else {
        div2.style.display = "none";
    }

    var x = window.matchMedia("(max-width: 550px)")
    myFunction(x) // Call listener function at run time
    x.addListener(
        switch) // Attach listener function on state changes


}

