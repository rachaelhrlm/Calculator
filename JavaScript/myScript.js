function updateEquation($button) {
    if (document.querySelector(".equation").innerHTML.indexOf("Error:") !== -1) {
        document.querySelector(".equation").innerHTML = "";
        document.querySelector(".phpequation").innerHTML = "";
    }
    document.querySelector(".equation").innerHTML += $button;
    if ($button === "x") {
        document.querySelector(".phpequation").innerHTML += "*";
    } else if ($button === "÷") {
        document.querySelector(".phpequation").innerHTML += "/";
    } else
        document.querySelector(".phpequation").innerHTML += $button;
}

function clearEquation() {
    document.querySelector(".equation").innerHTML = "";
    document.querySelector(".phpequation").innerHTML = "";
}

function sendEquation() {
    let str = document.querySelector(".phpequation").innerHTML;
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        document.querySelector(".equation").innerHTML = this.responseText;
        document.querySelector(".phpequation").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "Scripts/Maths.php?q=" + encodeURIComponent(str), true);
    xhr.send();
  }


