<?php
require_once 'classe.php';
$p = new Pet("epiz_31597876_inter","sql112.epizy.com","epiz_31597876","polido123");

$dados = $p->teste();

print_r($dados);

