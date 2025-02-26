<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="action_page.php" method="POST">
    <table border="1">

        <tr>
            <td>Question:</td>
            <td align="center">Answer:</td>
        </tr>
        <tr>
            <td> <strong> Name: </strong></td>
            <td> <input type="text" name="name"
            value="ZEPP POGI"> </td>
        </tr>
        <tr>
            <td> <strong> Gender: </strong></td>
            <td>
                <input type="radio" name="gender" value="Male" checked> Male
                <input type="radio" name="gender" value="Female"> Female
            </td>
        </tr>
        <tr>
            <td> <strong> Country:</strong></td>
            <td>
                <select name="country">
                    <option value="">Select Country:</option>
                    <option value="PH" selected>Philippines</option>
                    <option value="AUS">Australia</option>
                    <option value="US">United States</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="submit" value="Save">
            </td>
        </tr>
    </table>
</form>
</body>
</html>