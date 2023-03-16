<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

$a = mysqli_connect("localhost","root","","szczyty");
$b = mysqli_query($a,"SELECT id FROM szczyty WHERE id >=1 and id <=5");
while($ne = mysqli_fetch_row($b)){
    echo "<img src='$ne[0].jpg'>";
}
mysqli_close($a);
    ?>
</body>
</html>