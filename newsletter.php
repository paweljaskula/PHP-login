<!DOCTYPE html>

<html>

<head>
    <link href="styl.css" rel="Stylesheet" type="text/css"/> 
    <title>Projekt Jaskuła 44185</title>
    <h1>Newsletter</h1>
</head>

<body>
    <form action="newsletter.php" method="post">
    <p>Podaj email do newslettera </p>
    Email: <br /><input type="text" name="email1"/><br/>
    <input type="submit" value="Dodaj"/><br/><br/>
    </form>
    <?php
        $connect = mysqli_connect('localhost', 'root', '', 'projekt_jaskula44185')
            or die ("Nie udało się połączyć z bazą danych");
        $email1 = @$_POST['email1'];
        mysqli_query($connect, "INSERT INTO `newsletter_emails` (`id`, `email`) VALUES (NULL, '$email1');") or die("Złe dane");
        mysqli_close($connect);
        ?>
    <section>
        <nav>
            <ul>
               <li><a href="menu.php">Strona głowna</a></li>
            </ul>
        </nav>
    </section>
</body>
 
</html>