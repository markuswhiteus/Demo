<?php
/*%%SmartyHeaderCode:960719464571f9c7a417c54_20832799%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e81070950b0831f9e51f3fd20e97032ab4e6fc2' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/search.tpl',
      1 => 1461676300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '960719464571f9c7a417c54_20832799',
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
    'nouser' => 0,
    'th1' => 0,
    'th2' => 0,
    'th3' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9c7a498e75_67132461',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9c7a498e75_67132461')) {
function content_571f9c7a498e75_67132461 ($_smarty_tpl) {
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
				<h1 id="header">Search Users</h1>
			</div>
			
		</div>
		<div class="content">
			<form action='' method='post'>
              <label><span>Username:</span> <input type='text' name='searchusername'></label>
              <input type='submit' value='Search' name='search'>              
      </form>
      <p></p>
      <table class= "center">
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr> 
              </table>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>