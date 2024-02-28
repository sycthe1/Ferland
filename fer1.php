<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="submit" name="calculate">


    </form>
    <?php
         if(isset($_POST['calculate'])){
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $sum = $n1 + $n2;
            $diff = $n1 - $n2;
            $prod = $n1 * $n2;
            $qou = $n1 / $n2;
            echo "the sum of $n1 and $n2 is ".$sum . "<br>";
            echo "the difference of $n1 and $n2 is ".$diff ."<br>";
            echo "the product of $n1 and $n2 is ".$prod ."<br>" ;
            echo "the quotent of $n1 and $n2 is ".$qou ;
        }
        ?>
</body>
</html>