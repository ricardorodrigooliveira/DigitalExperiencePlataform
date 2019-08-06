<?php
  print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $id = 200;
      $button = 'Clique aqui agora';
    ?>
    <a href="get.php?id=<?php echo $id;?>"><?php echo $button;?></a>
  </body>
</html>
