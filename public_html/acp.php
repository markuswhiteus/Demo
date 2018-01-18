<?php
require ('./smartyHeader.php');
include 'connect.php';

if (isset($_SESSION["loggedin"]) == true){
  $link5 = 'My Profile';
  $url = 'profile.php';
  $username = $_SESSION["username"];
    if($_SESSION["Level"] >= 2) {
        $alink =  '<li><a class="active" href="acp.php" >Admin</a></li>';
      }
      else{
      $alink = null;
      }
}
else{
  $link5 = 'Login';
  $url = 'login.php';
  $alink = null;
  header("Location:login.php");
}

if ($_SESSION["Level"] < 2) {
   die("You are not admin <a href='profile.php'>Back to profile.</a>");
}



 

$title = 'Messaging App';
$header = 'Admin Control Panel';
$link1 = 'Home';
$link2 = 'Inbox';



$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);
$smarty->assign('alink',$alink);






$smarty->display('admin.tpl');
?>





