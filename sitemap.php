<?php
require './connect.php';
$sql = "SELECT * FROM labours";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINE SITE MAP</title>
    <link rel="stylesheet" href="./assets/css/sitemap.css">
</head>
<body>
    <div class="main">
        <?php
        foreach(array_chunk($result->fetch_all(),3) as $dots)
        { ?>
        <div class="division">
            <?php
            foreach($dots as $dot)
            { ?>
                <span class="dot"><?php echo $dot[1] ?></span>
            <?php } ?>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>