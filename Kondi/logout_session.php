<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    session_start();
    if (isset($_SESSION["user_id"])) {

        function function_alert($message)
        {

            echo "<script>alert('$message');</script>";
        }

        function_alert("Sikeres kijelentkezés!");
    }

    session_destroy();

    header("Location: kondifooldal.php");
    ?>
</body>

</html>