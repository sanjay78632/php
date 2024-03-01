<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function selection() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var r = document.getElementsByName("game");
    var game;
    for (var i = 0; i < r.length; i++) {
        if (r[i].checked) {
            game = r[i].value;
            break; // exit the loop once a radio button is found to be checked
        }
    }

    xmlhttp.open('GET', 'radio.php?radioselect=' + game, true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.send();
}
</script>
</head>
<body style="margin-left:500px;">
<input type="radio" name="game" value="Cricket" onclick="selection()"/>Cricket<br/>
<input type="radio" name="game" value="Football" onclick="selection()" />Football<br />
<input type="radio" name="game" value="Tennis" onclick="selection()" />Tennis<br />
<!--<input type="button" name="game" value="Tennis" onclick="selection()" /><br />-->
<h1 id="info"></h1>
</body>
</html>
