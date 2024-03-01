<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display</title>
<script>
function catdisplay() {
    var r = document.getElementById('cat').value;
    var xmlhttp;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        // For older versions of Internet Explorer
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    };

    xmlhttp.open('GET', 'product_search.php?sr=' + r, true);
    xmlhttp.send();
}
</script>
</head>
<body>

<select name="cat" id="cat" onchange="catdisplay()">
    <option value="">Please Select</option>
    <option value="product1">product1</option>
    <option value="product2">product2</option>
    <option value="product3">product3</option>
    <option value="product4">product4</option>
</select>

<h1 id="info"></h1>

</body>
</html>
