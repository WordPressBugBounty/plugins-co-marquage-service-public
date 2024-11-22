<?php 
$date = str_replace('modified ', '',  $data[0]['text']);

$formatter = DateTimeImmutable::createFromFormat('Y-m-d', $date);
echo 'Vérifié le ' . esc_html($formatter->format( 'd/m/Y')) . ' - ';
?>