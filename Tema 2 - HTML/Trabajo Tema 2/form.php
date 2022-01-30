<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/favicon/favicon200x200.png" sizes="200x200">
    <title>Form</title>
</head>
<body>
    <?php
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $comment = $_POST['comment'];

        echo $name."<br>";
        echo $mail."<br>";
        echo $comment."<br>";
    ?>
</body>
</html>