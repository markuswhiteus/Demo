<?php
require ('./smartyHeader.php');
include 'connect.php';

if (isset($_SESSION["loggedin"]) == true){
    $link5 = 'My Profile';
    $url = 'profile.php';
    $username = $_SESSION["username"];
    $UID = $_SESSION["UID"];
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
    $username = '';
    $UID = '' ;
    header("Location:login.php");
    $alink = null;
}

$title = 'Messasing App';
$header = 'Update Profile';
$link1 = 'Home';


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);
$smarty->assign('alink',$alink);


if (isset($_POST['update'])) {
  if (isset($_POST['pjob'])){
    $pjob = mysqli_real_escape_string($conn, $_POST['pjob']);
    }
    if ($pjob != '') {                                                                                                                
    $conn->query("UPDATE `users` SET `Pjob`='{$pjob}' WHERE `ID`='{$UID}'");     
�   ?
  if (isset($_POST['ks1'])){
    $ks1 = mysqli_real_escape_string($conn, $_POST['ks1']);
    if($ks1 != ''){
    $conn->query("UPDATE `users` SET `Ks1`='{$ks1}' WHERE `ID`='{$UID}'");
    }
    }                                                                                                                
  if (isset($_POST['ks2'])){
    $ks2 = mysqli_real_escape_string($conn, $_POST['ks2']);
     if ($ks2 != '') {                                                                                                         
    $conn->query("UPDATE `users` SET `Ks2`='{$ks2}' WHERE `ID`='{$UID}'");
    }
    }
    header("Location:profile.php");    
  }


$smarty->display('uprofile.tpl');
?>