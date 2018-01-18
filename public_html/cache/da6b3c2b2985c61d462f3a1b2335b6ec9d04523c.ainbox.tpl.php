<?php
/*%%SmartyHeaderCode:1296583432571f9dd1051535_43636290%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da6b3c2b2985c61d462f3a1b2335b6ec9d04523c' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/ainbox.tpl',
      1 => 1461688357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296583432571f9dd1051535_43636290',
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
  'unifunc' => 'content_571f9dd10ea009_65183213',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9dd10ea009_65183213')) {
function content_571f9dd10ea009_65183213 ($_smarty_tpl) {
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
				    <li><a href="inbox.php" >Inbox</a></li>
				    <li><a class="active" href="acp.php" >Admin</a></li>
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">Flagged Messages</h1>
			</div>
			
		</div>
		<div class="content">
      <table class="center">
        <tr>
          <th colspan="3">Flagged Messages</th>
        </tr>
        <tr>
          <th>Sender</th>
          <th>Recipient</th>
		  <th>Subject</th>
        </tr>
                  <tr>
            <td>Markus</td>
            <td>Markus</td>
			<td><a class=ured href="read.php?mid=1">Hello</a></td>
          </tr>
                  <tr>
            <td>joe1</td>
            <td>Markus</td>
			<td><a class=ured href="read.php?mid=4">Hello</a></td>
          </tr>
                  <tr>
            <td>Markus</td>
            <td>joe1</td>
			<td><a class=ured href="read.php?mid=5">Click me</a></td>
          </tr>
                  <tr>
            <td>Markus</td>
            <td>joe1</td>
			<td><a class=ured href="read.php?mid=13">1231</a></td>
          </tr>
                  <tr>
            <td>joe1</td>
            <td>joe1</td>
			<td><a class=ured href="read.php?mid=17">long ting</a></td>
          </tr>
                
      </table>
      </div>
	 
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>