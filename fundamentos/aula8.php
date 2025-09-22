<?php
$date = date('d-m-Y', strtotime($_GET["nascimento"]));
 echo '<p>Olá, ' . $_GET["nome"] . '!</p>';
 echo '<p>Data de Nascimento: ' . $data . '</p>';





?>