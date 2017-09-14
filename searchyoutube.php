<!-- SearchYoutube V 1.0
Kei Lazu
Search here, and you'll be redirected to youtube complete with your input -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search to Youtube</title>

    <script>
        function keiSearchAndGet() {
            keiStringSearch = 'https://www.youtube.com/results?search_query=' + keiSearchBox.value;
            // document.getElementById('searchResult').innerHTML= keiStringSearch;
            
            window.open(keiStringSearch);
            // i feel so terrible to myself because of this codes idk why
            
        }
    </script>

</head>
<body>
    <h1>Search to Youtube below</h1>
    <input type="text" name="searchBox" id="keiSearchBox"><br/>
    <input type="button" value="Search" onclick="keiSearchAndGet()">
    <br/><br/>
    <input type="button" value="Back" onclick="location.href='index.php'">
    <div id="searchResult"></div>
</body>
</html>