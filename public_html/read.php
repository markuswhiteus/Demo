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
$sendto = null;
$mid=$_GET['mid'];
$sql = "SELECT * FROM msgs WHERE MID = '{$mid}'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      $Sender = $row['Sender'];
      $Subject = $row['Subject'];
      $Message = $row['Message'];
      $sendto = $row['Recipient'];
      $flagged = $row['Flagged'];
    $conn->close();
    }
    if ($sendto != $username ){
      if ($flagged == true && $_SESSION["Level"] >= 2){
      }
      else{   
      die("Message not found or you do not have permission to view it <a href='inbox.php'>Back</a>");
      }
    }
    
   

$title = 'Messaging App';
$header = 'Inbox';
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
$smarty->assign('Sender',$Sender);
$smarty->assign('Subject',$Subject);
$smarty->assign('Message',$Message);
$smarty->assign('mid',$mid);
$smarty->assign('alink',$alink);







$smarty->display('read.tpl');
?>





