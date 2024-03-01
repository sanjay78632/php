<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email-Form</title>
</head>
<body>
    <form action="prg1_submit.php" method="post">
        <table>
            <tr>
                <td><label for="Fname" >Enter Your Name:</label></td>
                <td><input type="text" name="Fname" required></td>
            </tr>
            <tr>
            <td><label for="Fname">Enter Your Email:</label></td>
            <td><input type="email" name="email" id=""required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset">
            </td>     
            </tr>
        </table>
    </form>
</body>
</html>