<!-- dialogboxexperiment V 1.0
Kei Lazu
Experiment the dialog box -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Dialog Box Experiment</title>
</head>
<body>
    <input type="text" name="keiUserName" id="keiUserName"> <br>
    <input type="button" value="Click Me For Dialog Box" onclick="keiDialogNumber1()"><br><br>
    <input type="button" value="Click Me For Confirmation Box" onclick="keiDialogConfirming()"><br>
    <input type="button" value="Back" onclick="keiGoingBack()">
</body>

<script>
    function keiDialogNumber1() {
        alert('Hai ' + keiUserName.value);
    }

    function keiDialogConfirming() {
        if (confirm('What button do you want to click')) {
            alert('Okay');
        } else {
            alert('Why you cancel that one? T_T now Miku is sad');

        }
    }
    
    function keiGoingBack() {
        if (confirm('Are you sure?')) {
            location.href="index.php";
        }
    }

</script>

</html>