                                                                   <?php
require ('./smartyHeader.php');
include 'connect.php';
if (isset ($_GET['mid'])){
  $mid=$_GET['mid'];
}
else{
  header("Location:inbox.php");
}

if (isset($_SESSION["loggedin"]) == true){
  $link5 = 'My Profile';
  $url = 'profile.php';
  $username = $_SESSION["username"];
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
  header("Location:login.php");
}
$sql = "SELECT * FROM msgs WHERE MID = '{$mid}'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
      $Sender = $row['Sender'];
      $Subject = $row['Subject'];
      $Message = $row['Message'];
      $sendto = $row['Recipient'];
      $flagged = $row['Flagged'];
    } 

if ($sendto == $username){
  if (isset($_POST['flag'])) {
    $conn->query("UPDATE `msgs` SET `Flagged`= 1 WHERE `MID`='{$mid}'"); 
    echo" <SCRIPT language= 'JavaScript' type='text/javascript'>";
    echo"window.alert('Message Flagged!');";
    echo"</script>";    
  }
}
else{
  header("Location:inbox.php");
}


$title = 'Messaging App';
$header = 'User Profile';

$link1 = 'Home';
$link2 = 'Inbox';



$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);
$smarty->assign('username',$username);
$smarty->assign('alink',$alink);

$smarty->display('flag.tpl');
?>





