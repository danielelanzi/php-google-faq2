<!-- Ciao Ragazzi,
esercizio di oggi
cartella/repo php-google-faq
Riscrivere questa pagina del sito google
https://policies.google.com/faq
Ci sono diverse domande con relative risposte.
Gestire il “Database” $db = [//dati]  e la visualizzazione di queste domande e risposte con PHP.
Lato grafico usate css, se poi vi funziona tutto provate ad implementare SASS nella cartella bonus, ricordando di inserire .gitignore per node_modules. -->
<?php
  include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <title>Google faq</title>
  </head>
  <body>

    <?php include "partials/header.php"; ?>

    <div class="container">
      <?php if (!empty($db)) {?>
        <?php foreach ($db as $key => $value){ ?>
          <h1><?php echo $value['title']; ?></h1>
          <p><?php echo $value['text']; ?></p>
        <?php } ?>
      <?php } else { ?>
        <h2>Non ci sono Faq</h2>
      <?php } ?>

    </div>
  </body>
</html>
