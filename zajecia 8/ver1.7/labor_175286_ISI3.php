<?php
$nr_indeksu = '175286';
$nrGrupy = 'ISI3';

echo '<h2>Laboratorium PHP — '.$nr_indeksu.' grupa '.$nrGrupy.'</h2>';
echo '<hr>';
echo '<h3>Zastosowanie metody include()</h3>';

echo '<h3>a) Metoda include() i require_once()</h3>';
include('naglowek.php');
require_once('naglowek.php');
echo '<hr>';

echo '<h3>b) Warunki if, else, elseif, switch</h3>';
$liczba = 10;

if ($liczba > 10) {
    echo 'Liczba większa niż 10<br>';
} elseif ($liczba == 10) {
    echo 'Liczba równa 10<br>';
} else {
    echo 'Liczba mniejsza niż 10<br>';
}

$kolor = 'zielony';
switch ($kolor) {
    case 'czerwony':
        echo 'Kolor to czerwony<br>';
        break;
    case 'zielony':
        echo 'Kolor to zielony<br>';
        break;
    default:
        echo 'Inny kolor<br>';
}
echo '<hr>';

echo '<h3>c) Pętla while() i for()</h3>';
$i = 1;
while ($i <= 3) {
    echo 'Pętla while — iteracja '.$i.'<br>';
    $i++;
}
echo '<br>';
for ($j = 1; $j <= 3; $j++) {
    echo 'Pętla for — iteracja '.$j.'<br>';
}
echo '<hr>';

echo '<h3>d) Typy zmiennych $_GET, $_POST, $_SESSION</h3>';
session_start();
$_SESSION['user'] = 'Student PHP';
echo 'Zmienna sesyjna: '.$_SESSION['user'].'<br><br>';

echo '<form method="GET">
    <label>Podaj imię (GET): </label>
    <input type="text" name="imie_get">
    <input type="submit" value="Wyślij GET">
</form>';
if (isset($_GET['imie_get'])) {
    echo 'Wartość przekazana przez GET: '.$_GET['imie_get'].'<br><br>';
}

echo '<form method="POST">
    <label>Podaj imię (POST): </label>
    <input type="text" name="imie_post">
    <input type="submit" value="Wyślij POST">
</form>';
if (isset($_POST['imie_post'])) {
    echo 'Wartość przekazana przez POST: '.$_POST['imie_post'].'<br><br>';
}

echo '<hr>';
echo '<p>Koniec pliku labor_'.$nr_indeksu.'_'.$nrGrupy.'.php</p>';
?>
