<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>           
    <form action="" method="POST">
        <input type="text" name="a">
        <input type="submit" name="sumbmit" value="Check length">
    </form>
    <?php
        $str1 = $_POST['a'];
        echo "<h4>The Given String is : </h4>" . $str1;
        
        echo "<br><h4>length of the string : </h4>" . strlen($str1);
        echo "<br>";
        echo "<h4>no of words in string : </h4>" . str_word_count($str1);
    ?>
</body>
</html>