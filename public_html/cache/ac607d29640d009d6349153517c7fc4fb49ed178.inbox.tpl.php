<?php
/*%%SmartyHeaderCode:1665993711571fa04969c283_44815914%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac607d29640d009d6349153517c7fc4fb49ed178' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/inbox.tpl',
      1 => 1461688278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1665993711571fa04969c283_44815914',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'link1' => 0,
    'url' => 0,
    'link5' => 0,
    'link2' => 0,
    'alink' => 0,
    'header' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571fa049848648_85140960',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571fa049848648_85140960')) {
function content_571fa049848648_85140960 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>Messaging App</title>
	   <link rel="stylesheet" type="text/css" href="ham.css"/>
    </head>
    <body>
        <div class="hbg">
			
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" >Home</a></li>
					<li><a href="profile.php" >My Profile</a></li>
				    <li><a class="active" href="inbox.php" >Inbox</a></li>
					
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">Inbox</h1>
			</div>
			
		</div>
		<div class="msgcontent">
      <table class="center">
        <tr>
          <th colspan="2">Your Details</th>
        </tr>
        <tr>
          <th>Sender</th>
          <th>Subject</th>
        </tr>
                
      </table>
      </div>
	  <div id="menu-outer">
	    <div class="table">
	        <ul id="profile">
                <li><a href="compose.php">Compose Message</a></li>
             </ul>
		</div>
	</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>