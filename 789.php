<?php
$tablica = [5, 3, 8, 3, 1, 9, 2, 3, 7, 4];
echo "Wprowadzona tablica: " . implode(", ", $tablica) . "<br><br>";


$min = min($tablica);
$max = max($tablica);
echo "2.2. Najmniejszy: $min, Największy: $max<br>";


$srednia = array_sum($tablica) / count($tablica);
echo "2.3. Średnia: $srednia<br>";


$ilosc_trojek = array_count_values($tablica)[3] ?? 0;
echo "2.4. Ilość trójek: $ilosc_trojek<br>";


$posortowana = $tablica;
sort($posortowana);
echo "2.5. Posortowana rosnąco: " . implode(", ", $posortowana) . "<br>";


$tmp = $posortowana;
$n = count($tmp);
if ($n % 2 == 0) {
    $mediana = ($tmp[$n / 2 - 1] + $tmp[$n / 2]) / 2;
} else {
    $mediana = $tmp[floor($n / 2)];
}
echo "2.6. Mediana: $mediana<br>";


$trzy_min = array_slice($posortowana, 0, 3);
$trzy_max = array_slice($posortowana, -3);
echo "2.7. 3 najmniejsze: " . implode(", ", $trzy_min) . " | 3 największe: " . implode(", ", $trzy_max) . "<br>";


$kwadraty = array_map(function($x) { return $x ** 2; }, $tablica);
echo "2.8. Kwadraty elementów: " . implode(", ", $kwadraty) . "<br>";

$parzyste = count(array_filter($tablica, function($x) { return $x % 2 == 0; }));
$nieparzyste = count($tablica) - $parzyste;
echo "2.9. Parzyste: $parzyste, Nieparzyste: $nieparzyste<br>";


$podzielne_przez_3 = count(array_filter($tablica, function($x) { return $x % 3 == 0; }));
echo "2.10. Podzielne przez 3: $podzielne_przez_3<br>";
?>
