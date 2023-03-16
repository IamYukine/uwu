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
echo "<table>";
$p = mysqli_connect('localhost','root','','egzamin');

$z = mysqli_query($p,"SELECT czas,kierunek,nr_rejsu,status_lotu FROM przyloty;");

mysqli_close($p);
while($ne = mysqli_fetch_row($z)){
echo "

<tr>
<td>
$ne[0]
</td>
<td>
$ne[1]
</td>
<td>
$ne[2]
</td>
<td>
$ne[3]
</td>
</tr>



";
}
echo "</table>";                               
    ?>
</body>
</html>