function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var response = JSON.parse(xhttp.responseText);

      var text = "";
      for (var i = 0; i < response.length; i++) {
        text += response[i].name;
      }
      document.getElementById("txtHint").innerHTML = text;
    }
  };
  xhttp.open("GET", "php11F_gethint2.php?keyword=" + str, true);
  xhttp.send();
}
