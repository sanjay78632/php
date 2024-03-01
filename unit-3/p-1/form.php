<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax form</title>
    <script src="script.js"></script>
</head>
<body>
    <form action="post" name="frm" id="frm" onsubmit="showdata(); return false;">
        Enter Username <input type="text" id="t" name="t2"><br>
        Enter Password <input type="password" name="t2" id="t2"><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <h1><div id="info"></div></h1>
</body>
</html>
