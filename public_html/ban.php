                                                   <?php
require ('./smartyHeader.php');
include 'connect.php';

if (isset ($_GET['UID'])){
  $UID=$_GET['UID'];
}
else{
  $UID=null;
}

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

if (isset($_POST['ban'])) {
  if(isset($_POST['uid'])){
    $buid = mysqli_real_escape_string($conn, $_POST['uid']);
    $query = $conn->query("SELECT * FROM `users` WHERE `ID` = '{$buid}'") or die(mysqli_error($conn));
    $user = $query->fetch_assoc();
    $banned = $user['banned'];
    if ($banned == 0){
      $conn->query("UPDATE `users` SET `banned`= 1 WHERE `ID`='{$buid}'");
      echo" <SCRIPT language= 'JavaScript' type='text/javascript'>";
      echo"window.alert('User Banned!');";
      echo"</script>";
    }
    else if ($banned == 1){
      $conn->query("UPDATE `users` SET `banned`= 0 WHERE `ID`='{$buid}'");
      echo" <SCRIPT language= 'JavaScript' type='text/javascript'>";
      echo"window.alert('User Unbanned!');";
      echo"</script>";
    }
  }
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
$smarty->assign('UID',$UID);






$smarty->display('ban.tpl');
?>





