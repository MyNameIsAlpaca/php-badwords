<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Il tuo risultato</title>
</head>
<body>
<form action="index.php">
  <button type="submit">Torna indietro</button>
  </form>

  <?php $message = $_POST['message']
  ?>

  <span>Il tuo messaggio è "<?php echo $message?>" ed è lungo <?php echo strlen($message)?> caratteri!</span>

  <br>

  <?php $message = str_replace('chiamo', '***', $message )?>

  <span>Il tuo messaggio corretto senza la parola "chiamo" è "<?php echo $message ?>" ed è lungo <?php echo strlen($message)?> caratteri!</span>

</body>
</html>