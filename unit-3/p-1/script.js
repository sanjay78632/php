function showdata() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    var unm = document.getElementById('t').value;
    var pass = document.getElementById('t2').value;

    // Use FormData to send data as POST
    var formData = new FormData();
    formData.append('uname', unm);
    formData.append('Password', pass);

    xmlhttp.open('POST', 'aform.php', true);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }
    // Send the FormData object
    xmlhttp.send(formData);
}
