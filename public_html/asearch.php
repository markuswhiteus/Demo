<?php
require ('./smartyHeader.php');
include 'connect.php';

$data = null;
$nouser = null;
$th1 = null;
$th2 = null;
$th3 = null;
$title = 'Messasing App';
$header = 'Search Users';
$link1 = 'Home';


if (isset($_SESSION["loggedin"]) == true){
    $link5 = 'My Profile';
    $url = 'profile.php';
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
  }
  
if (isset($_POST['search'])) {
  if (isset($_POST['searchusername'])){
  
    $searchuser = mysqli_real_escape_string($conn, $_POST['searchusername']);
    $query ="SELECT * FROM users WHERE Username LIKE '%$searchuser%'";
    $result = $conn->query($query);
    
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $data [] = $row; }
    $th1 = 'Username';
    $th2 = 'User ID';
    $th3 = 'Fullname';
      }
  else{
  $nouser="No user found!";
  }
    $conn->close();
    }
}


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);
$smarty->assign('data',$data);
$smarty->assign('nouser',$nouser);
$smarty->assign('th1',$th1);
$smarty->assign('th2',$th2);
$smarty->assign('th3',$th3);
$smarty->assign('alink',$alink);


$smarty->display('search.tpl');
?>