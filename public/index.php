<html>

<body>

<form action="/upload.php" method="post" enctype="multipart/form-data">
    <label for="file">Select file:</label>
    <input type="file" id="file" name="file">
    <label for="file">Share file publicly:</label>
    <input type="checkbox" id="public" name="public" value="Yes">
    <input type="submit" value="Submit">
</form>

</body>
</html>
