<!DOCTYPE html>

<html>

<head>
    <link href="styl.css" rel="Stylesheet" type="text/css"/> 
    <title>Projekt Jaskuła 44185</title>
    <h1>Rejestracja</h1>
</head>

<body>
    <form action="rejestracja.php" method="post">
        Email: <br /><input type="text" name="email"/><br/>
        Login: <br /><input type="text" name="login"/><br/>
        Hasło: <br/><input type="password" name="haslo"/><br/>
        Imie: <br /><input type="text" name="imie"/><br/>
        Nazwisko: <br /><input type="text" name="nazwisko"/><br/>
        Wiek: <br /><input type="text" name="wiek"/><br/>
        Newsletter (wpisz 0 lub 1): <br /><input type="text" name="newsletter"/><br/>
        
        
        <input type="submit" value="Załóż konto"/><br/><br/>
    </form>
    <section>
        <nav>
            <ul>
                <li><a href="menu.php">Strona głowna</a></li>
            </ul>
        </nav>
    </section>
    <?php
    $mysqlConnection = mysqli_connect('localhost', 'root', '', 'projekt_jaskula44185') or die('Nie udało się połączyć z bazą danych');
    $email = @$_POST['email'];
    $login = @$_POST['login'];
    $haslo = @$_POST['haslo'];
    $imie = @$_POST['imie'];
    $nazwisko = @$_POST['nazwisko'];
    $wiek = @$_POST['wiek'];
    $newsletter = @$_POST['newsletter'];
    if (empty($_POST['login']) || empty($_POST['haslo'])|| empty($_POST['imie']) || empty($_POST['nazwisko']) || empty($_POST['wiek']) || empty($_POST['newsletter'])) {
                echo "Wprowadź wszystkie dane.";
            }   
    else {
          $sql = "INSERT INTO `klienci` (`id`, `email`, `login`, `password`, `imie`, `nazwisko`, `wiek`, `newsletter`, `register_time`) VALUES (NULL, '$email', '$login', '$haslo', '$imie', '$nazwisko', '$wiek', '$newsletter', CURRENT_TIMESTAMP);";  
          mysqli_query($mysqlConnection, $sql) or die("Niepoprawne dane, prawdopodobnie login jest już zajęty");
          echo 'Dodano, możesz się zalogować.';
    }
    
    
    
    
    mysqli_close($mysqlConnection);
    
    ?>
</body>
 
</html>