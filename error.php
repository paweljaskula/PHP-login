<!DOCTYPE html>

<html>

<head>
    <link href="styl.css" rel="Stylesheet" type="text/css"/> 
    <title>Projekt Jaskuła 44185</title>
    <h1>asd</h1>
</head>

<body><?php
        $mysqlConnection = mysqli_connect('localhost', 'root', '', 'projekt_jaskula44185') or die('Nie udało się połączyć z bazą danych');
        $idd = $_POST['id'];
        $produkt = @$_POST['nr'];
        $ilosc = @$_POST['ilosc'];
        $qqq = mysqli_query($mysqlConnection, "SELECT cena FROM produkty WHERE id='$produkt'");
        $rr = mysqli_fetch_assoc($rr);
        mysqli_query($mysqlConnection, "INSERT INTO `zamowienia` (`id`, `id_klienta`, `data_zamowienia`) VALUES (NULL, '$idd', CURRENT_TIMESTAMP);");
        mysqli_query($mysqlConnection, "INSERT INTO `zamowione_produkty` (`id`, `id_zamowienia`, `id_produktu`, `ilosc`, `cena_za_szt`) VALUES (NULL, '$idd', '$produkt', '$ilosc', '$qqq');");
        
        
        mysqli_close($mysqlConnection);
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

