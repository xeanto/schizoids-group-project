function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive clicked";
  } else {
    x.className = "topnav";
  }
}
