<?php 

//project start time


$raw = '02. 10. 2013';
$start = \DateTime::createFromFormat('d. m. Y', $raw);



$end = clone $start;
$end->add(new \DateInterval('P1M6D'));

$diff = $end->diff($start);
echo 'Fark: ' . $diff->format('%m ay, %d gün (toplam: %a days)') . "\n";

?>
