function myFunction() {
  var x = document
    .getElementById("myTopnav")
    .getElementsByClassName("nav-content");
  for (var element in x) {
    element.attributes["display"] == "block"
      ? element.setAttribute("display", "none")
      : element.setAttribute("display", "block");
  }
  document.getElementById("myTopnav").setAttribute("display", "none");
}

function setInline() {
  var x = document.getElementById("myTopnav").children;
  console.log(x);
  for (var element in x) {
    element.attributes["display"] = "none";
    element.setAttribute("display", "none");
  }
}
