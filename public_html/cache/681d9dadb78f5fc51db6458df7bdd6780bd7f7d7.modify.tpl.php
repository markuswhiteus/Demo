<?php
/*%%SmartyHeaderCode:2125917477571f9857c8f137_91696578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681d9dadb78f5fc51db6458df7bdd6780bd7f7d7' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/modify.tpl',
      1 => 1460644592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125917477571f9857c8f137_91696578',
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
    'alink' => 0,
    'header' => 0,
    'header2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9857cff8f0_21799273',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9857cff8f0_21799273')) {
function content_571f9857cff8f0_21799273 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>Messasing App</title>
	   <link rel="stylesheet" type="text/css" href="ham.css"/>
    </head>
    <body>
        <div class="hbg">
			
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" >Home</a></li>
					<li><a href="profile.php" >My Profile</a></li>
					<li><a href="acp.php" >Admin</a></li>
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">Change Username</h1>
			</div>
			
		</div>
		<div class="content">
      <h3>Change Username</h3>
			<form action='' method='post'>
              <label><span>New Username:</span> <input type='text' name='newusername'></label>
              <input type='submit' value='Change Username' name='changename'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>