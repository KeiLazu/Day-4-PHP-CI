<!-- Get Variable From Post V 1.0
Kei Lazu
Result from bringvartophp.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Var</title>

    <script>
    function keiBackToLastPage() {
        if (confirm('Are you sure?')) {
            location.href="bringvartophp.php";
        } else {

        }
        
    }

    </script>

</head>
<body>
    <?php
        echo "hai " . $_POST["keiUserName"] . "<br>";
        echo "your Email is " . $_POST["keiUserEmail"] . " based on your input" . "<br>";
    ?>

    <input type="button" value="Back" onclick="keiBackToLastPage()"><br>
    <input type="button" value="Back to Index" onclick="location.href='index.php'">

</body>

<script>
window.onbeforeunload = function () {
    if (confirm('Data will be re-sent if you refresh, still want to refresh?')) {
        window.unload();
    }
}

</script>

</html>