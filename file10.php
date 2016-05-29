<?php
if ($_SERVER['PHP_AUTH_USER'] != "scott" ||
    $_SERVER['PHP_AUTH_PW'] != "tiger")
{
    header('WWW-Authenticate: Basic realm="Logowanie"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<h1>brak autoryzacji</h1>";
    exit();
}
print<<<KONIEC
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Nie pieprz wieprza...</h1>
<p>"Nie pieprz, Pietrze, pieprzem wieprza,
Wtedy szynka będzie lepsza."
<p>"Właśnie po to wieprza pieprzę,
Żeby mięso było lepsze."
<p>"Ależ będzie gorsze, Pietrze,
Kiedy w wieprza pieprz się wetrze!"
</body>
</html>
KONIEC;
?>