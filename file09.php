<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php
class heads_tails
{
    public $heads;
    public $tails;
    function heads_tails()
    {
        $this->heads = 0;
        $this->tails = 0;
    }
    function add_head() { $this->heads++; }
    function add_tail() { $this->tails++; }
}
?>
<form action="file09.php" method="post">
    <input type="submit" value="rzuć monetą"/>
</form>
<?php
$result = rand() % 2;
if (!isset($_SESSION['state']))
    $state = new heads_tails;
else
    $state = $_SESSION['state'];
switch($result)
{
    case 0: $state->add_head(); break;
    case 1: $state->add_tail(); break;
};
$_SESSION['state'] = $state;
echo
echo
echo
echo
echo
?>
</body>
</html>
"<h2>dotychczasowy wynik</h2>";
"<ul>";
    "<li>orzełek: ".$state->heads."</li>";
    "<li>reszka: ".$state->tails."</li>";
    "</ul>";