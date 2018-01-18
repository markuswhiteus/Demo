<?php
/*%%SmartyHeaderCode:884533180571f9f0af39475_15470781%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ddb853610c6bdeece3bc705c24e117f5d000d92' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/admin.tpl',
      1 => 1461676765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884533180571f9f0af39475_15470781',
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
  'unifunc' => 'content_571f9f0b055142_08852654',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9f0b055142_08852654')) {
function content_571f9f0b055142_08852654 ($_smarty_tpl) {
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
					<li><a class="active" href="acp.php" >Admin</a></li>
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
	
				<h1 id="header">Admin Control Panel</h1>
			</div>
			
		</div>
		<div class="content">
      <h3> Admin Control Panel</h3>
		</div>
		
		 <div id="menu-admin">
	    <div class="table">
	        <ul id="profile">
                <li><a href="ainbox.php">Flagged Messages</a></li>
				        <li><a href="asearch.php">Search Users</a></li>
             </ul>
		</div>
	</div>
   <div id="menu-admin">
		
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>