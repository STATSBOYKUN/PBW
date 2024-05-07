<!DOCTYPE html>
<html lang="en-ID">

<head>
    <title>Ajax Demonstration</title>
    <meta charset="utf-8">
</head>
<script>
    var ajaxRequest;
    function ajaxResponse() {
        // check to see if we're done
        if (ajaxRequest.readyState != 4) {
            return;
        } else {
            // check to see if successful
            if (ajaxRequest.status == 200) {
                var plholder = document.getElementById("showtime");
                plholder.innerHTML = ajaxRequest.responseText;
            } else {
                alert("Request failed: " + ajaxRequest.statusText);
            }
        }
    }
    function getServerTime() {
        ajaxRequest = new XMLHttpRequest();
        var svcUrl = "telltime.php";
        ajaxRequest.onreadystatechange = ajaxResponse;
        ajaxRequest.open("GET", svcUrl);
        ajaxRequest.send(null);
    }
    function autoUpdateTime() {
        setInterval(getServerTime, 1000);
    }
        // Write a function to auto-update the time
</script>

<body onload="autoUpdateTime()">
    <h1>Ajax Demonstration</h1>
    <h2>Getting the server time without refreshing the page</h2>
    <form>
        <input type="button" value="Get Server Time" onclick="getServerTime()" />
    </form><br />
    <div id="showtime" class="displaybox"></div>
</body>

</html>