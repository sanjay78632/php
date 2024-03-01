function showdata() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    var unm = document.getElementById('t').value;
    xmlhttp.open('GET', 'aform_keyup.php?uname=' + unm, true);

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("info").innerHTML = "Invalid Response";
        }
    };

    xmlhttp.send();
}
