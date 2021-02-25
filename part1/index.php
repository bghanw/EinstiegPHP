<?php
$title = "auftrag 1";

//Wörtekette
$a1 = "Fischers Fritz";
$b1 = "Fische";
$c1 = "frische";
$d1 = "fischt";

//Rechnen mit PHP1
$zahl1 = 11;
$zahl2 = 8;
$sam = $zahl1 + $zahl2;
$min = $zahl1 - $zahl2;
$multi = $zahl1 * $zahl2;
$div = $zahl1 / $zahl2;
$pro = $zahl1 %  $zahl2;

//Rechnen mit PHP2
$a = 12;
$b = 57.3;
$c = "$a";
$d = 0.4675;
$result1 = $a - $b;
$result2 = $a - $b * $d;
$result3 = $a - $b * $c;
$result4 = ($a ==$b);
$result5 = ($c != $d);

//cities
$cities = array(
    "Bern",
    "Basel",
    "Zürich",
    "Luzern",
    "Fribourg",
    "Lugano"
);

?>

<?php
$cities2 = array(
    "Bern" => array(
        "Köniz",
        "Bümpliz",
        "Münsingen"
    ),
    "Basel" => array(
        "Bettingen",
        "Riehen"
    ));


?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>

<body>
<p><h2> Wörterkette</h2>
<?php
//Wörtekette
print "Hello World <br>";
print "$a1 $d1 $c1 $b1, $c1 $b1 $d1 $a1  <br>";
?>
</p>

<p><h2> Rechnen mit php 1</h2>
<?php

//Rechnen mit PHP1
print "$zahl1 + $zahl2 = $sam  <br>";
print "$zahl1 - $zahl2 = $min  <br>";
print "$zahl1 * $zahl2 = $multi  <br>";
print "$zahl1 / $zahl2 = $div  <br>";
print "$zahl1 % $zahl2 = $pro  <br>";
?>
<p><h2> Rechnen mit php 2</h2>
<?php

//Rechnen mit php2
print "$result1 <br>";
print "$result2 <br>";
print "$result3 <br>";
print "$result4 <br>";
print "$result5 <br>";
?>
</p>

<p><h2> Find die Fhler</h2>
<?php

//Finde die Fehler
$currMonth=date('F', time());
switch($currMonth) {
    Case 'January':
        echo "Es ist Januar <br>";
        break;
    case 'February':
        echo "Es ist Februar <br>";
        break;
        defauld:
        echo "Es ist weder Januar noch Februar";
}
?>
</p>

<p><h2> var_dump( )</h2>
<?php
//Var dump()

$test = 32;
echo var_dump($test) . "<br>";
$test1 = "Hallo World";
echo var_dump($test1) . "<br>";
?>
</p>

<p><h2> gettype( )</h2>
<?php
// Gettype()

$var = 'Nomerus';
echo gettype($var) . "<br>";
$var = 81.3;
echo gettype($var) . "<br>";
$var = true;
echo gettype($var) . "<br>";
$var = 13;
echo gettype($var) . "<br>";
$var = null;
echo gettype($var) . "<br>";

?>
</p>

<p><h2> Arrays </h2>
<?php
// Array
// print r()
$test = [1,2,"this is a text",4,5];
echo var_dump($test) . "<br>";
print_r($test);

?>
</p>

<p> <h1>Bullet List</h1>
<?php

foreach ($cities as $value)
    echo "<li> $value</li>";
?>
</p>

<p> <h1>Numbered List</h1>
<?php

echo '<ol>';
foreach ($cities2 as $city => $community) {
    echo "<li>$city</li>";
    echo "<ol>";
    foreach ($community as $item) {
        echo "<li>$item</li>";
    }
    echo "</ol>";
}
echo '</ol>';
?>
</p>

<p> <h2>Assoziatives Array</h2>
<?php
echo $cities2["Bern"][2];
?>
</p>

<p> <h2> Schleifen</h2>
<?php
$colors = ["red", "green", "blue", "yellow"];
for($i = 0; $i < sizeof($colors); $i++){
    echo "color $i: $colors[$i]<br>";
}
?>
</p>

<p> <h2> Quadrieren</h2>
<?php
for($zahl = 13; $zahl <= 27; $zahl++){

    echo "$zahl * $zahl  = " . $zahl * $zahl . "<br>";
}
?>
</p>

<p> <h2> Tabelle erstellen</h2>
<table>
    <?php
  for ($i = 1; $i < 7; $i++){
      echo "
        <tr>
        <td> $i </td>
        </tr>
      ";
  }
    ?>
</table>
</p>


<h2><?php echo "$_POST[‘city’]" ?></h2>
<form method="post" action="/path1/$filename">
    <input type="text" value="$_POST[‘city’]" name="city" />
    <?php if(isset($_POST[‘active’])){ ?>
        <input type="checkbox" checked="checked" name="active" />
    <?php } else { ?>
        <input type="checkbox" name="active" />
    <?php } ?>
</form>



</body>

</html>
