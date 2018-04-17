<!DOCTYPE html>

<html>

<head>
    <link href="styl.css" rel="Stylesheet" type="text/css"/> 
    <title>Projekt Jaskuła 44185</title>
    <h1>Składanie zamówienia</h1>
</head>

<body>
    Podaj id klienta w celu przypisania zamówienia
    <form action="error.php" method="post">
        <br/>ID: <br /><input type="text" name="id"/><br/><br/>
    
    <p>Wprowadz odpowiedni numer produktu oraz ilosc</p>
    Nr produktu: <br /><input type="text" name="nr"/><br/>
    Ilość: <br /><input type="text" name="ilosc"/><br/>
    <input type="submit" value="Zamów"/><br/><br/>
    </form>
    <?php
    $mysqlConnection = mysqli_connect('localhost', 'root', '', 'projekt_jaskula44185') or die('Nie udało się połączyć z bazą danych');
    $tabela = mysqli_query($mysqlConnection, "SELECT * FROM produkty") or die(mysqli_error($mysqlConnection));
        if (mysqli_num_rows($tabela)>0) {
            while ($row = mysqli_fetch_assoc($tabela))
                {
                    echo "<table border='1' cellspacing='0'>";
                    echo "<tr><td>".$row['id']."</td>";
                    echo "<td>".$row['nazwa']."</td>";
                    echo "<td>Cena: ".$row['cena']."</td></tr>";
                    echo "</table>";
                }
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