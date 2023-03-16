<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa kwiaciarni polskich</h1>
    </header>
 
    <nav>
        <h2>Menu</h2>
 
        <ol>
            <li><a href="index.html">Strona głowna</a></li>
            <li><a href="https://www.kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdz kwiaciarnie</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </li>
        </ol>
    </nav>
    <main>
        <h2>Znajdź kwiaciarnie</h2>
 
        <form action="" method="post">
            Podaj nazwę miasta:
            <input type="text" name="miasto" id="">
            <input type="submit" value="SPRAWDŹ">
 
        </form>
        <?php
        @$miasto = $_POST['miasto'];
        $p = mysqli_connect("localhost","root","","kwiaciarnia");
        $z = mysqli_query($p,"SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto'");
        mysqli_close($p);
 
        while(@$ne = mysqli_fetch_row($z)){
            echo "<h3>$ne[0],$ne[1]</h3>";
            
            
        }
 
        ?>
    </main>
    <footer>
        <p>Stronę opracował: uwuś</p>
    </footer>
</body>
</html>