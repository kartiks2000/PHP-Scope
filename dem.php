<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Scope in PHP</h1>
    <?php    

        $x = 'outside';
        echo $x . "<br>";

        function fun(){
            global $x;
            $x = 'inside';
            echo 'inside the function  ' . $x . "<br>";
        }
        
        fun();
        echo $x . "<br>";
        
    ?>
</body>
</html>
