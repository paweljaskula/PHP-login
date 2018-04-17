<!DOCTYPE html>
<?php
        $mysqlConnection = mysqli_connect('localhost', 'root', '', 'projekt_jaskula44185') or die('Nie udało się połączyć z bazą danych');
            if (empty($_POST['login']) || empty($_POST['haslo'])) {
                echo "Nie podano loginu lub hasla. Spróbuj ponownie <a href='logowanie.php'>tutaj</a>";
            }
            else{
                $login = $_POST['login'];
                $haslo = $_POST['haslo'];  
                $sql = "SELECT * FROM klienci WHERE login='$login' AND password='$haslo'";
                $rezultat = mysqli_query($mysqlConnection,$sql);
                if (mysqli_num_rows($rezultat)>0) {
                    $rezultat = mysqli_query($mysqlConnection,"SELECT * FROM klienci WHERE login='$login' AND password='$haslo'");
                    $row = mysqli_fetch_assoc($rezultat);
                    echo "Witaj ".$row['imie']." ".$row['nazwisko']." ,zalogowano!";
                    
                }
                else
                    echo "Niepoprawny login lub hasło. Spróbuj ponownie <a href='logowanie.php'>tutaj</a>";
                }
              
            mysqli_close($mysqlConnection);
            
            
            
            
            
            
            
        
    ?>
<html>

<head>
    <link href="styl.css" rel="Stylesheet" type="text/css"/> 
    <title>Projekt Jaskuła 44185</title>
</head>
<body>
    <br/><br/><br/><br/><br/><br/><br/>
    <section>
        <nav>
            <ul>
                <li><a href="menu.php">Powrót do strony głównej</a></li>
                
            </ul>
        </nav>
    </section>
    
</body>
 
</html>