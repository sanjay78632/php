<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upper Case</title>
    <style>
        #info {
            color: black;
            background-color: whitesmoke;
        }
    </style>
    <script src="script.js"></script>
</head>
<body>
    Enter Your Name: <input type="text" name="n1" id="n1" value="" onkeyup="uppercase()">
    <a href="javascript:void(0);" onclick="uppercase()">Uppercase</a>
    <h1 id="info"></h1>
</body>
</html>
