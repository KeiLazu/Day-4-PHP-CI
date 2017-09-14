<!-- Get Variable From Get V 1.0
Kei Lazu
Result from bringvartophp.php Get method -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Var</title>
</head>
<body>
    <?php
        echo "hai " . $_GET["keiName"] . "<br>";
        echo "your age is " . $_GET["keiAge"] . " based on your input" . "<br>";
    ?>

    <input type="button" value="Back" onclick="location.href='bringvartophp.php'"><br>
    <input type="button" value="Back to Index" onclick="location.href='index.php'">

</body>
</html>

