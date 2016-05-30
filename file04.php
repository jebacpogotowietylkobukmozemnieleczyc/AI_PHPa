<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
 <form action="file04.php" method="GET">
 Podaj numer karty:
 <input type="text" maxlength="19" size="19" name="numer_karty"
 value="<?php echo $_GET['numer_karty']; ?>"/>
 Podaj datę ważności:
 <input type="text" maxlength="5" size="5" name="data_waznosci"
 value="<?php echo $_GET['data_waznosci']; ?>"/>
 <input type="submit" value="wyślij"/>
 <input type="reset" value="wyczyść"/>
</form>
 <?php
 $numer_karty = $_GET['numer_karty'];
 $data_waznosci = $_GET['data_waznosci'];
 if (!preg_match("/^(\d{4}[\s\-]?){3}\d{4}$/",$numer_karty))
 echo "<div style=\"color: red\">podaj poprawny numer karty</div>";
 elseif (!preg_match("/^\d{2}\/\d{2}$/",$data_waznosci))
 echo "<div style=\"color: red\">podaj poprawną datę</div>";
 else
 echo "podano poprawny numer karty kredytowej";
 ?>
</body>
</html>
