<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exersice03</title>
</head>
<body>
        <?php
            function test($x, $y) 
            {
                return ($y >= 20 && $y <= 50) || ($x >= 20 && $x <= 50);
            }
            var_dump(test(20, 84)); 
            echo "<br>";
            var_dump(test(14, 50));
            echo "<br>"; 
            var_dump(test(11, 45)); 
            echo "<br>";
            var_dump(test(25, 40)); 
            echo "<br>";
            var_dump(test(10, 19)); 
        ?>
</body>
</html>