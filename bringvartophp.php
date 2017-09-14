<!-- Bring Variable To PHP V 1.0
Kei Lazu
Differentiate between Get and Post, linked with getvarfromget.php and getvarfrompost.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variable Taker</title>
</head>
<body>
    <form action="/day4phpci/getvarfromget.php" method="GET">
        <input type="text" name="keiName" id="keiName1"><br>
        <input type="text" name="keiAge" id="keiAge2"><br>
        <input type="submit" value="Submit">
    </form><br><br>

    <form action="/day4phpci/getvarfrompost.php" method="post">
        <input type="text" name="keiUserName" id="keiUserName1"><br>
        <input type="text" name="keiUserEmail" id="keiUserEmail2"><br>
        <input type="submit" value="Submit">
    
    </form>

    <input type="button" value="Back" onclick="location.href='index.php'">
</body>
</html>