<?php
session_start();
?>
<?php
if(isset($_POST['logout'])){
    unset($_SESSION['drid']);
    header('Location:../main.php');
}
?>