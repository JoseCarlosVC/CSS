<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $news = $_POST['news'];
        $social = $_POST['social'];
        $tv = $_POST['tv'];
        $ads = $_POST['ads'];
        $other = $_POST['other'];

        $localization = $_POST['localization'];
        $guide = $_POST['guide'];
        $equipment = $_POST['equipment'];
        $review = $_POST['review'];

        echo "<h1>Checkboxes selected: </h1><br>";
        echo $news."<br>";
        echo $social."<br>";
        echo $tv."<br>";
        echo $ads."<br>";
        echo $other."<br>";
        
        echo "<br>";

        echo "<h1>Ranges</h1><br>";
        echo "<p>Localization: ".$localization."</p><br>";
        echo "<p>Guide: ".$guide."</p><br>";
        echo "<p>Equipment: ".$equipment."</p><br>";

        echo "<br>";
        echo "<p>Review: <br>".$review."</p>";
    ?>
</body>
</html>