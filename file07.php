<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="file07.php" method="GET">
    Podaj wartość: <input type="text" name="wartosc"/>
    <input type="submit" value="wyślij"/>
    <input type="reset" value="wyczyść"/>
</form>
<?php
class NumericException extends Exception
{
    function errorMessage()
    {
        $msg = "Błąd w linii ".$this->getLine()." w pliku ".
            $this->getFile().":".$this->getMessage();
        return $msg;
    }
}
$wartosc = $_GET['wartosc'];
try
{
    if (is_numeric($wartosc))
        throw new NumericException("wartość numeryczna");
    elseif (is_string($wartosc))
        throw new Exception("wartość znakowa");
}
catch(NumericException $e)
{
    echo $e->errorMessage();
}
catch(Exception $e)
{
    echo "Wystąpił wyjątek: ".$e->getMessage();
}
?>
</body>
</html>