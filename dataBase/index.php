<?php
 $connect = mysqli_connect("localhost", "Reda", "123456", "prototype2");
$sqlQuery = 'SELECT fname, lname, age FROM people';
$result =  mysqli_query($connect, $sqlQuery);

$dataList =  mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($dataList);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            foreach($dataList as $person){

          
        ?>

        <p>first name: <?php echo $person["fname"]?></p>
        <p>last name: <?php echo $person["lname"]?></p>
        <p> age: <?php echo $person["age"]?></p>
        <?php }?>
    </div>
</body>
</html>