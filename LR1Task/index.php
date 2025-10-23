<?php

$input = file_get_contents('input.txt');
$lines = explode("\n", trim($input));

list($N, $M) = explode(' ', $lines[0]);
$N = (int)$N;
$M = (int)$M;
$votes = array_fill(1, $N, 0);

for ($i = 1; $i <= $M; $i++) {
  $candidate = (int)trim($lines[$i]);
  $votes[$candidate]++;
}

$result = [];

for ($i = 1; $i <= $N; $i++) {
  $percent = ($votes[$i] / $M) * 100;
  $result[] = number_format($percent, 2, '.', '') . '%';
}
file_put_contents('output.txt', implode("\n", $result));

?>