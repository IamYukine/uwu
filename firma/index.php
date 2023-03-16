<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wizytówki</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    



<header>
    <h1>Wizytówki pracowników</h1>
    <form action="">
    <input type="number" name="num" id="edycja" min=1 max=9 value=1>
    <input type="button" value="WYŚWIETL" id="przycisk">
    </form>
    </header>
    <main>
    <?php
    $numerek = $_POST["num"];
$p = mysqli_connect("localhost","root","","firma");


$zap1 = mysqli_query($p,"SELECT  id, imie, nazwisko, adres, miasto FROM pracownicy WHERE id = " . $numerek);
while($ne=mysqli_fetch_array($zap1)){
    echo "<img src=$ne[0].jpg alt='pracownik'>
    <h2>$ne[1] $ne[2]</h2>
    <h4>Adres:</h4>
    <p>$ne[3],$ne[4]</p>
    ";
}
    


mysqli_close($p);
?>
    </main>
    
    <footer id='l'>
    <img src="obraz.jpg" alt="pracownicy firmy">
    </footer>
    
    <footer id='s'>
    <p>Autorem wizytownika jest: </p>
    <a href= "http://agencjareklamowa543.pl/" target="_blank" rel="noopener noreferrer">Zobacz nasze realizacje</a>
    </footer>
    
    <footer id='p'>
    <p>Osoby proszone o podpisanie dokumentu RODO:</p>
    <ol>
    
    </ol>
    </footer>

</body>
</html>