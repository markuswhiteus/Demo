<?php
require ('./smartyHeader.php');
include 'connect.php';

if (isset($_SESSION["loggedin"]) == true){
  session_destroy();
  header("Location: login.php");
}


$title = 'Messasing App';
$header = 'Login';
$link1 = 'Home';
$link5 = 'Login';
$url = 'login.php';


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);

if (isset($_POST['login'])) {
  if (isset($_POST['username']) && isset($_POST['password'])){
  
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, hash("sha512",$_POST['password']));
    $query = $conn->query("SELECT * FROM users WHERE Username = '{$username}'") or die(mysqli_error($conn));
    $user = $query->fetch_assoc();
    if ($user['Username'] != $username || $user['Password'] != $password ){
     echo" <SCRIPT language= 'JavaScript' type='text/javascript'>";
     echo"window.alert('Username Or Password Not Found!');";
     echo"</script>";
     }
    else if($user['banned']==1) {
     echo" <SCRIPT language= 'JavaScript' type='text/javascript'>";
     echo"window.alert('You are banned! Please contact an admin');";
     echo"</script>";
    }
    else{
      $salt = hash("sha512", rand() . rand(). rand());
      $userID = $user['ID'];
      $userLevel = $user['Level'];
      $conn->query("UPDATE `users` SET `Salt`='{$salt}' WHERE `ID`='{$userID}'");
      $_SESSION["username"] = $username;
      $_SESSION["UID"] = $userID;
      $_SESSION["loggedin"] = true;
      $_SESSION["Level"] = $userLevel;
      header("Location: index.php");
      }
    }
  }

$smarty->display('login.tpl');
?>