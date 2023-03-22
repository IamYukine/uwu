<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekretariat</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
 
    <main>
     
      <h1>Akta Pracownicze</h1>
 <?php
 $baza = mysqli_connect("localhost","root","","firma");
 $a = mysqli_query($baza, 'SELECT    imie, nazwisko, adres, miasto, czyRODO, czyBadania  FROM pracownicy WHERE   id = 2');
  $b = mysqli_fetch_row($a);
  echo"
  <h3>dane</h3>
  <p>$b[0] $b[1]</p>
  <hr>
  <h3>adres</h3>
  <p>$b[2]</p> <p>$b[3]</p>
  <hr>";
  if($b[4]==1){
    echo "<p>RODO:podpisano</p>";
  }
  else echo "<p>RODO:niepodpisano</p>";
  if($b[5]==1){
    echo "<p>Badania: aktualne</p>";
  }
  else echo "<p>Badania: nieaktualne</p>";
  
  mysqli_close($baza);
 ?>
      <hr> 
      <h3>Dokumenty pracownika</h3>
      <a href="cv.txt">Pobierz</a>
      <h1>Liczba zatrudnionych pracowników</h1>
      <p>
        <?php
$baza = mysqli_connect("localhost","root","","firma");
$a = mysqli_query($baza, 'SELECT COUNT(*)FROM pracownicy;');
$b = mysqli_fetch_row($a);
echo $b[0];
        mysqli_close($baza);
        ?>
      </p>
    </main>   
 

 <aside>

<?php
$baza = mysqli_connect("localhost","root","","firma");
$a = mysqli_query($baza, 'SELECT  id, imie, nazwisko from pracownicy where  id = 2');
while($b = mysqli_fetch_array($a)){
echo "<img src='$b[0].jpg' alt='pracownik'>";
echo "<h2>$b[1] $b[2]</h2>";
};
$baza2 = mysqli_connect("localhost","root","","firma");
$c = mysqli_query($baza2, 'SELECT  pracownicy.id,stanowiska.nazwa,stanowiska.opis from pracownicy, stanowiska where pracownicy.id=stanowiska.id and pracownicy.id =2 ');
while($d = mysqli_fetch_array($c)){
echo"<h4>$d[1]</h4>
<h5>$d[2]</h5>";
}
mysqli_close($baza);
mysqli_close($baza2);
?>

 </aside>
 
 
 <footer>
    Autorem aplikacji jest:uwu
    <ul>
        <li>skontaktuj się</li>
        <li>poznaj naszą firmę</li>
    </ul>
 </footer>
</body>
</html>