<?php
require ('./smartyHeader.php');

if (isset($_SESSION["loggedin"]) == true){
    $link5 = 'My Profile';
    $url = 'profile.php';
    $username = $_SESSION["username"];
    $link2 = '<li><a href="inbox.php" >Inbox</a></li>';
    $link3 = 'Logout';
    $url2 = 'login.php';
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
    $header2 = 'Welcome';
    $username = '';
    $link2 = null;
    $alink = null;
    $link3 = 'Register';
    $url2= 'register.php';
    
  }
  

$title = 'Messaging App';
$header = 'Messaging App';
$link1 = 'Home';
$header2 = 'Welcome ' . $username;

$content ="Placeholder text until joe comes up with something creative to put here...";


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link5',$link5);
$smarty->assign('header2',$header2);
$smarty->assign('content',$content);
$smarty->assign('url',$url);
$smarty->assign('url2',$url2);
$smarty->assign('link3',$link3);
$smarty->assign('alink',$alink);


$smarty->display('main.tpl');
?>