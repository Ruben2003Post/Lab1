<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="input" value="">
      <input type="submit" name="submit" value="submit">
    <?php
    if( isset( $_POST['submit'] ) ){
echo "Dit is de input: " . $_POST['input'];
}
    ?>
  </body>
</html>
