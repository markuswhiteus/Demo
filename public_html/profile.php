<?php
require ('./smartyHeader.php');
include 'connect.php';

if (isset($_SESSION["loggedin"]) == true){
  $link5 = 'My Profile';
  $url = 'profile.php';
  $username = $_SESSION["username"];
  $header2 = 'Welcome ' . $username;
  if($_SESSION["Level"] >= 2) {
        $alink =  '<li><a href="acp.php" >Admin</a></li>';
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


$sql = "SELECT Username, ID, Fullname, Pjob, Ks1, Ks2 FROM users WHERE Username = '{$username}'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      $ID = $row['ID'];
      $fullname = $row['Fullname'];
      $pjob = $row['Pjob'];
      $ks1 = $row['Ks1'];
      $ks2 = $row['Ks2'];}
    $conn->close();  

$title = 'Messaging App';
$header = 'My Profile';
$link1 = 'Home';
$link2 = 'Inbox';



$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link5',$link5);
$smarty->assign('header2',$header2);
$smarty->assign('url',$url);
$smarty->assign('username',$username);
$smarty->assign('ID',$ID);
$smarty->assign('Fullname',$fullname);
$smarty->assign('pjob',$pjob);
$smarty->assign('ks1',$ks1);
$smarty->assign('ks2',$ks2);
$smarty->assign('alink',$alink);






$smarty->display('profile.tpl');
?>





