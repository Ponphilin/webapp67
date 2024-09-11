<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variable via reference</title>
</head>
<body>
    <?php
    function addFive($num) {
        $num += 5;
    }

    function addSix(&$num) {
        $num += 6;
    }

    $origNum = 10; 
    addFive($origNum); 
    echo "Original Value is $origNum"; 
    echo "<br>";
    addSix($origNum);
    echo "Original Value is $origNum";
    ?>
</body>
</html>
