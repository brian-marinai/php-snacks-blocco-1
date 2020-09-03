<!-- jsnack 1 -->
<?php

  $partite = [
  [
    'squadraCasa' => 'Miami Heat',
    'squadraOspite' => 'L.A Lakers',
    'puntiCasa' => 101,
    'puntiOspite' => 105
  ],
  [
    'squadraCasa' => 'Boston Celtics' ,
    'squadraOspite' => 'Utah Jazz',
    'puntiCasa' => 110,
    'puntiOspite' => 120
  ],
  [

    'squadraCasa' => 'Chicago Bulls',
    'squadraOspite' => 'Dallas Mavericks',
    'puntiCasa' => 98,
    'puntiOspite' => 90
  ],
];

  foreach ($partite as $m) {

    echo $m["squadraCasa"] . ' - ' . $m['squadraOspite'] . ' | ' . $m['puntiCasa'] . ' - ' . $m['puntiOspite'] . '<br>';
  }

?>


<!-- jsnack 2 -->

<?php

  $nome = $_GET['name'];
  $email = $_GET['mail'];
  $age = $_GET['age'];

  $validname = strlen($name) > 3;
  $validmail = strpos($email, '.') !== false && strpos($email, '@') !== false;
  $validage = is_numeric($age);

  if ($validname && $validmail && $validage) {
    echo 'Accesso Riuscito';
  } else {
    echo 'Accesso Negato';
  }

?>

<!-- jsnack 3 -->


<?php

  $numeri = [];

  while(count($numeri) < 15) {

    $numerir = rand(1, 100);

    if (!in_array($numerir, $numeri)) {

      $numeri[] = $numerir;

    }
  }

  var_dump($numeri);

 ?>
