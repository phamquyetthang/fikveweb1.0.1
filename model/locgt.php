<?php
session_start();
?>
<html>
<head>
  <meta http-equiv='refresh' content='0.5; URL=http://localhost/fikveweb1.0.1/main.php'>
</head>
</html>
<?php
$_SESSION['sexvar'] = 0;
if(isset($_POST['man'])){
    $_SESSION['sexvar'] = 1;
}
if(isset($_POST['girl'])){
    $_SESSION['sexvar'] = 2;
}
if(isset($_POST['lgbt'])){
    $_SESSION['sexvar'] = 3;
}
?>