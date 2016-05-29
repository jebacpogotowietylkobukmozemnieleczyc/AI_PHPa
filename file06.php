<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="file06.php" method="GET">
    Podaj długość: <input type="text" size="4" name="x"/>
    Podaj szerokość: <input type="text" size="4" name="y"/>
    Podaj wysokość: <input type="text" size="4" name="z"/>
    <input type="submit" value="wyślij"/>
    <input type="reset" value="wyczyść"/>
</form>
<?php
function custom_error_handler($error_code, $error_message)
{
    echo "<div style=\"{position: absolute; left: 10px; bottom: 100px;
color: red}\" >";
    echo "<hr><b>Error:</b> [$error_code] $error_message</div>";
    die();
}
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
class prostopadloscian extends prostokat
{
    private $wysokosc;
    function prostopadloscian($dlugosc, $szerokosc, $wysokosc)
    {
        parent::prostokat($dlugosc, $szerokosc);
        $this->wysokosc = $wysokosc;
    }
    function objetosc()
    {
        return parent::pole() * $this->wysokosc;
    }
}

?>
<?php
set_error_handler("custom_error_handler");
$int_options = array("options"=>array("min_range"=>1));
$x = filter_var($_GET['x'], FILTER_VALIDATE_INT, $int_options);
$y = filter_var($_GET['y'], FILTER_VALIDATE_INT, $int_options);
$z = filter_var($_GET['z'], FILTER_VALIDATE_INT, $int_options);
if ($x && $y && $z)
{
    $moj_prostopadloscian = new prostopadloscian($x,$y,$z);
    echo "objętość prostopadłościanu o wymiarach ".$x."x".$y."x".$z."
wynosi ".$moj_prostopadloscian->objetosc();
}
else
    trigger_error("proszę podać poprawne wymiary");
?>
</body>
</html>