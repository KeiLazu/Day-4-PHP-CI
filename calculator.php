<!-- Calculator V 1.0
Kei Lazu
Calculator.... -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator Experimental</title>

    <script>
    function keiCalculatePlus() {
        keiFirstNumber = parseFloat(document.getElementById('keiInput1').value) || 0;
        keiSecondNumber = parseFloat(document.getElementById('keiInput2').value) || 0;

        keiResult = keiFirstNumber + keiSecondNumber;
        document.getElementById('result').innerHTML = keiResult;

    }

    function keiCalculateMinus() {
        keiFirstNumber = parseFloat(document.getElementById('keiInput1').value) || 0;
        keiSecondNumber = parseFloat(document.getElementById('keiInput2').value) || 0;

        keiResult = keiFirstNumber - keiSecondNumber;
        document.getElementById('result').innerHTML = keiResult;

    }

    function keiCalculateTimes() {
        keiFirstNumber = parseFloat(document.getElementById('keiInput1').value) || 0;
        keiSecondNumber = parseFloat(document.getElementById('keiInput2').value) || 0;

        keiResult = keiFirstNumber * keiSecondNumber;
        document.getElementById('result').innerHTML = keiResult;

    }

    function keiCalculateDiv() {
        keiFirstNumber = parseFloat(document.getElementById('keiInput1').value) || 0;
        keiSecondNumber = parseFloat(document.getElementById('keiInput2').value) || 0;

        keiResult = keiFirstNumber / keiSecondNumber;
        document.getElementById('result').innerHTML = keiResult;

    }
    
    </script>

</head>

<body>
    <input type="text" name="input1" id="keiInput1"> <br/>
    <input type="text" name="input2" id="keiInput2"> <br/>
    <div id="result"></div>
    <br/>
    <input type="button" value="+" onclick="keiCalculatePlus()"> 
    <input type="button" value="-" onclick="keiCalculateMinus()"> 
    <input type="button" value="*" onclick="keiCalculateTimes()"> 
    <input type="button" value="/" onclick="keiCalculateDiv()">
    <br/><br/><br/><br/><input type="button" value="Back" onclick="location.href='index.php'">

</body>

</html>