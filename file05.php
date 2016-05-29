<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="file05.php" method="GET">
    Podaj długość:
    <input type="text" size="4" name="x"/>
    Podaj szerokość: <input type="text" size="4" name="y"/>
    <input type="submit" value="wyślij"/>
    <input type="reset" value="wyczyść"/>
</form>
<?php
class prostokat
{
    private $dlugosc;
    private $szerokosc;
    function prostokat($dlugosc, $szerokosc)
    {
        $this->dlugosc = $dlugosc;
        $this->szerokosc = $szerokosc;
    }
    function pole()
    {
        return $this->dlugosc * $this->szerokosc;
    }
}
?>
<?php
$int_options = array("options"=>array("min_range"=>1));
$x = filter_var($_GET['x'], FILTER_VALIDATE_INT, $int_options);
$y = filter_var($_GET['y'], FILTER_VALIDATE_INT, $int_options);
if ($x && $y)
{
    $moj_prostokat = new prostokat($x,$y);
    echo "pole prostokąta o wymiarach ".$x."x".$y." wynosi
".$moj_prostokat->pole();
}
else
    echo "<div style=\"color: red\">podaj poprawne wymiary</div>";
?>
</body>
</html>