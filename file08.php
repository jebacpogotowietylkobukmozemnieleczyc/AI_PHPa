<?php setcookie("last_visit",time(),time()+3600); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php
if (isset($_COOKIE['last_visit']))
{
    $last_visit = $_COOKIE['last_visit'];
    echo "Ostatnia wizyta :".date("d M Y H:i:s",$last_visit);
}
else
    echo "To Twoja pierwsza wizyta";
?>
</body>
</html>