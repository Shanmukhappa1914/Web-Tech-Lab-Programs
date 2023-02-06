<!-- Write a simple calculator program in PHP using switch case -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Write a simple calculator program in PHP using switch case</h2>
    <form action="" method="POST" enctype="multipart/form">
        Enter First Number : <input type="text" name="a"/><br><br>
        Enter Second Number : <input type="text" name="b"/><br><br>
        <input type="radio" name="arithmetic" value="add"/>Addition
        <input type="radio" name="arithmetic" value="sub"/>Substraction
        <input type="radio" name="arithmetic" value="mult"/>Multiplication
        <input type="radio" name="arithmetic" value="div"/>Division <br><br>
        <input type="submit" name="submit1" value="submit"/> <br><br>
    </form>
    <?php
    if(isset($_POST["submit1"])){
        $a = $_POST["a"];
        $b = $_POST["b"];
        $arithmetic = $_POST["arithmetic"];
        // echo $a;
        switch($arithmetic){
            case 'add' : echo "Addition of two numbers is : " . $a + $b;
            break;
            case 'sub' : echo "Substraction of two numbers is : " . $a - $b;
            break;
            case 'mult' : echo "Multiplication of two numbers is : " . $a * $b;
            break;
            case 'div' : echo "Division of two numbers is : " . $a / $b;
            break;
        }
    }
    ?>
</body>
</html>

