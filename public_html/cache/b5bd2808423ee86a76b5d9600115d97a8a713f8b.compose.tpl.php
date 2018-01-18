<?php
/*%%SmartyHeaderCode:406023120571fa04b3d9996_33835788%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5bd2808423ee86a76b5d9600115d97a8a713f8b' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/compose.tpl',
      1 => 1461688776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406023120571fa04b3d9996_33835788',
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
    'link3' => 0,
    'alink' => 0,
    'header' => 0,
    'sendto' => 0,
    'subject' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571fa04b562b09_99665099',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571fa04b562b09_99665099')) {
function content_571fa04b562b09_99665099 ($_smarty_tpl) {
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
					<li><a href="inbox.php" >Inbox</a></li>
					<li><a class="active" href="compose.php" >Compose</a></li>
					
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">Compose Message</h1>
			</div>
			
		</div>
		<div class="content">
			<form action='' method='post'>
        <label><span>Recepient:</span> <input type='text' name='sendto' value=''></label>
			  <label><span>Subject:</span> <input type='text' name='sub' value=''></label>
			  <label><span>Message:</span> <textarea class="compose" name="msg"></textarea></label>
        <input type='submit' value='Send' name='send'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>