<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <p><?php echo 2+3; ?></p>
    <p>
        <?php
            $a = 10;
            $b = 15;

            echo "Start value <br>";
            echo "a= ". $a ."<br>";
            echo "b= ". $b ."<br>";

            $a ^= $b;
            $b ^= $a;
            $a ^= $b;

            echo "After:<br>";

            echo "a=". $a ."<br>";
            echo "b= ". $b ."<br>";
        ?>
    </p>
</body>
</html>
