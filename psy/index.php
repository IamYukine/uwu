<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
    <h1>Forum miłośników psów</h1>
    </header>
    
    <aside>
    <img src="Avatar.png" alt="Użytkownik forum">
    <?php
$a = mysqli_connect('localhost','root','','forumpsy');
$b = mysqli_query($a,"SELECT konta.nick,konta.postow,pytania.pytanie FROM konta,pytania WHERE konta.id = pytania.id and konta.id=1");

while($c=mysqli_fetch_array($b)){
    echo"
    <h4>Użytkownik:$c[0]</h4>
    <p>$c[1]postów na forum</p>
    <p>$c[2]</p>
    ";
};




mysqli_close($a);
    ?>
    <video src="video.mp4" loop="true" controls></video>
    </aside>
    
    <main>
    <form action="" method="post">
    <textarea name="tekst" id="" cols="40" rows="4"></textarea>
    <input type="submit" value="Dodaj odpowiedz" onclick=funkcja()>
    </form>
    <?php
  function funckja(){
      
       echo "<script>console.log('{$tekst}' );</script>";
  };
$tekst = $_POST['tekst'];


$baza = mysqli_connect('localhost','root','','forumpsy');
if(!empty($tekst)){
$in = mysqli_query($baza, "INSERT INTO  odpowiedzi (id,Pytania_id,konta_id,odpowiedz) VALUES  (NULL,1,5,'$tekst')"  );
};

mysqli_close($baza);



    ?>
    <h2>Odpowiedzi na pytanie</h2>
    <ol>
    <?php
$baza2 = mysqli_connect('localhost','root','','forumpsy');
$list = mysqli_query($baza2," SELECT odpowiedzi.odpowiedz,konta.nick FROM konta,odpowiedzi WHERE odpowiedzi.konta_id=konta.id");
while($wynik=mysqli_fetch_array($list)){
    echo "
    <li>
    $wynik[0]
    <i>$wynik[1]</i>
    </li>
    ";
};

mysqli_close($baza2);
    ?>
    </ol>
    
    </main>
    
    <footer>
    Autor:uwu
    <a href="http://mojestrony.pl/" target="_blank" rel="noopener noreferrer">Zobacz nasze realizacje</a>
    </footer>

</body>
</html>