<!DOCTYPE html>

<html>

<head>
    <link href="styl.css" rel="Stylesheet" type="text/css"/> 
    <title>Projekt Jaskuła 44185</title>
    <h1>Widok zamówień produktu</h1>
</head>

<body>
    
        <?php
        $mysqlConnection = mysqli_connect('localhost', 'root', '', 'projekt_jaskula44185') or die('Nie udało się połączyć z bazą danych');
        
        $tabela = mysqli_query($mysqlConnection, "SELECT * FROM widok_zamowien");
        
     for ($i=0; $i < mysqli_num_rows($tabela);$i++)
     {
         $row1 = mysqli_fetch_assoc($tabela);
         echo "<table border='1' cellspacing='0' style='float: left; margin: 10px;'>";
         foreach ($row1 as $key => $value)
         {
             echo "<tr><td>". ucfirst($key.": $value</td></tr>");
         }
         echo "</table>";
     }
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