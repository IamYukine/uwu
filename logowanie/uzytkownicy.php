<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>„Portal społecznościowy</title>
</head>
<body>
 <header id=jeden>
    <h2>Nasze osiedle</h2>
</header>

 <header id=dwa>
 <?php
$baza = mysqli_connect('localhost','root','','portal');
$a = mysqli_query($baza,"SELECT * FROM dane ");
$b = mysqli_num_rows($a);
echo "Liczba użytkowników portalu:$b";
?> 
 </header>

 <main>
    <h3>Logownaie</h3>
    <form action="" method="post">
        Login <br>
        <input type="text" name="login" id=""> <br>
        Hasło <br>
        <input type="password" name="haslo" id=""> <br>
        <input type="submit"id="b" value="Zaloguj">
    </form>
 </main>

 <aside>
    <h3>Wizytówka</h3>
    <section>
        <!-- <?php
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        
        $baza = mysqli_connect('localhost','root','','portal');

        if(!empty){
            $a = mysqli_query($baza,"SELECT haslo FROM uzytkownicy WHERE login='Justya' ");
        }
        ?> -->
    </section>

 </aside>

 <footer>
    Stronę wykonał:uwu
    Pesel
 </footer>

</body>
</html>