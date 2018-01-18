<?php
/*%%SmartyHeaderCode:1466833963571fa04fa011f0_64568253%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4b9675825d6ae897a00b775c8d9b663a8b9a07' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/main.tpl',
      1 => 1460644592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466833963571fa04fa011f0_64568253',
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
    'url2' => 0,
    'link3' => 0,
    'header' => 0,
    'header2' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571fa04fa91c28_80660780',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571fa04fa91c28_80660780')) {
function content_571fa04fa91c28_80660780 ($_smarty_tpl) {
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
					<li><a class="active" href="index.php" >Home</a></li>
					<li><a href="profile.php" >My Profile</a></li>
					<li><a href="inbox.php" >Inbox</a></li>
                   
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">Messaging App</h1>
			</div>
			
		</div>
		<div class="content">
      <h3 class="uname">Welcome warsame</h3>
			<p>Placeholder text until joe comes up with something creative to put here...</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>