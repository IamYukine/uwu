<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">

</head>
<body>
    <header>
<h1>Hurtownia spożywcza</h1>
</header>

    <main>
        <h2>Opinie naszych klientów</h2>
         <?php
      $baza = mysqli_connect('localhost','root','','hurtownia');
      $a = mysqli_query($baza,'SELECT    klienci.zdjecie,opinie.opinia,klienci.imie FROM klienci,opinie WHERE    klienci.id = opinie.id');
       while($b = mysqli_fetch_row($a)){
       echo"
       <div>
        <img src='$b[0]' alt='klienci'>
        <blockquote> $b[1]</blockquote>
        <h4>$b[2]</h4>
        </div>
        ";
       
       };
       mysqli_close($baza);
       ?>
    </main>
        
    <footer>
        <h3>Współpracują z nam</h3>
        <a href="http://sklep.pl">Sklep1</a>
    </footer>

    <footer>
        <h3>Nasi top klienci</h3>
        <ol>
             <?php
                
                $baza = mysqli_connect('localhost','root','','hurtownia');
                $d = mysqli_query($baza,'SELECT imie,nazwisko,punkty FROM klienci WHERE punkty ORDER BY punkty DESC LIMIT 3' );
                while($e = mysqli_fetch_row($d)){
                    echo"
                    <li> $e[0] $e[1] $e[2] pkt. </li>
                    ";
                };
                mysqli_close($baza);
           ?> 
        </ol>
    </footer>

    <footer>
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </footer>

    <footer>
        <h3>Autor:uwu</h3>
    </footer>

    
</body>
</html>