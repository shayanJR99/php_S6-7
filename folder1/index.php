<html>
<head>
    <title>TXT File Reader</title>
    <style>
        body {
            background-color:rgb(74, 57, 31);
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <form action="action1.php" method="post" enctype="multipart/form-data">
        First Name: <input type="text" name="fname" required><br>
        Last Name: <input type="text" name="lname" required><br>
        Photo: <input type="file" name="image" required><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>