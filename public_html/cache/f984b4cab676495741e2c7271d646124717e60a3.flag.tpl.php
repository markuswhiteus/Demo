<?php
/*%%SmartyHeaderCode:850118294571f9c98825ec4_53223446%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f984b4cab676495741e2c7271d646124717e60a3' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/flag.tpl',
      1 => 1461689447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '850118294571f9c98825ec4_53223446',
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
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9c9887d8d5_45074345',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9c9887d8d5_45074345')) {
function content_571f9c9887d8d5_45074345 ($_smarty_tpl) {
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
					<li><a href="acp.php" >Admin</a></li>
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
	
				<h1 id="header">User Profile</h1>
			</div>
			
		</div>
		<div class="content">
      <h3> Flag Message</h3>
		</div>
		
		 <div id="menu-admin">
	   <form action='' method='post'>
            <p> Click below to flag message as inappropriate. </p> 
			<input type='submit' value='Flag Message' name='flag'>
      </form>
	</div>
   <div id="menu-admin">
		
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>