<?php

$conta1 = [
    'titular' => 'Kerley',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Geraldo',
    'saldo' => 2500
];
$conta3 = [
    'titular' => 'Maria',
    'saldo' => 2000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . "<p>";
    echo $contasCorrentes[$i]['saldo'] . "<p>";
}

?>