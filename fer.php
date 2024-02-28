<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="monday" value="monday">
        <input type="submit" name="tuesday" value="tuesday">
        <input type="submit" name="wednesday" value="wednesday">
        <input type="submit" name="thursday" value="thurday">
        <input type="submit" name="friday" value="friday">

    </form>
    <?php
    if(isset($_POST['monday'])){
        echo "monday";
    }
    if(isset($_POST['tuesday'])){
        echo "tuesday";
    }
    if(isset($_POST['wednesday'])){
        echo "wednesday";
    }
    if(isset($_POST['thursday'])){
        echo "thursday";
    }
    if(isset($_POST['friday'])){
        echo "friday";
    }
    ?>
</body>
</html>