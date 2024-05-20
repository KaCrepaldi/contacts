<?php
     $projeto = "Agenda de Contatos";
     include('./includes/functions.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $projeto ?></title>
</head>
<body>
      <div class="container">
        <h1><?php echo $projeto ?></h1>
        <h2><?php echo boasVindas("Karla") ?></h2>
        
      <form action="./includes/createContact.php" method="post">
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="lastname" placeholder="Sobrenome">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="phone" placeholder="Telefone">
        <button type="submit">Cadastrar</button>
      </form>
      
         <h3><?= $projeto ?></h3><!--  shorttag = tag curta -->

      <ul>

      <? include('./includes/listContacts.php') ?>
      </ul>
    </div>
    
</body>
</html>