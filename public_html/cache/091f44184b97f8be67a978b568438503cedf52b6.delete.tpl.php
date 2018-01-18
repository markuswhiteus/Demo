<?php
/*%%SmartyHeaderCode:545546798571f9907dc6df2_80048699%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '091f44184b97f8be67a978b568438503cedf52b6' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/delete.tpl',
      1 => 1461688582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '545546798571f9907dc6df2_80048699',
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
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9907e27143_44721031',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9907e27143_44721031')) {
function content_571f9907e27143_44721031 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>Messasging App</title>
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
				<h1 id="header">Delete Account</h1>
			</div>
			
		</div>
		<div class="content">
			<form action='' method='post'>
              <input type='submit' value='Delete Account' name='delete'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>