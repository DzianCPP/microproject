<!DOCTYPE html>
<html>

<head>
    <title>MicroProject</title>
</head>

<body>
    <div class="mainDiv">
        <h1>
            Insert Your Name
        </h1>

        <br>
        <form action="insert_into_db.php" method="post">
            <input type="text" name="insertName" id="insertName" placeholder="insert name here"><br>

            <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"><br>
        </form>

    </div>

    echo ("<script>
        location.href = "index.php"
    </script>)
</body>

</html>