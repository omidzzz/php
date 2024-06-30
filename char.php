<?php
require __DIR__ . '/inc/all.inc.php';

$char = strtoupper((string) ($_GET['char'] ?? ''));

if (strlen($char) > 1){
  $char = $char[0];
}

if (strlen($char) === 0){
  header('Location: index.php');
  die();
}

$names = fetch_names_by_initial($char);


render('char.view', [
  'char' => $char,
  'names' => $names
]);