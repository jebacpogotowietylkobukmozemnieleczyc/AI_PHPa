<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="file02.php" method="GET">
    Podaj wartość x: <input type="text" name="x"/>
    <input type="submit" value="wyślij"/>
    <input type="reset" value="wyczyść"/>
</form>
<?php
$x = $_GET['x'];
if (is_numeric($x))
{
    $suma = 0;
    for ($i=0; $i<$x; $i++)
        $suma += $i;
    echo "suma liczb od 1 do ".$x." wynosi: ".$suma;
}
else
    echo "<div style=\"color: red\">proszę podać poprawną liczbę</div>";
?>
</body>
</html>