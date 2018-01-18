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
$data = null;
$sql = "SELECT Sender, Recipient, Subject, MID FROM msgs WHERE Flagged = 1";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
    $data[] = $row;
      }
     
    $conn->close();  

$title = 'Messasing App';
$header = 'Flagged Messages';
$link1 = 'Home';
$link2 = 'Inbox';
$link3 = 'Compose';




$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);
$smarty->assign('username',$username);
$smarty->assign('data',$data);
$smarty->assign('alink',$alink);








$smarty->display('ainbox.tpl');
?>