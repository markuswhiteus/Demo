<?php
/*%%SmartyHeaderCode:762986097571fa042254813_87058575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce40646419623f4f29f852eb506c72578da2cf2' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/profile.tpl',
      1 => 1461688467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '762986097571fa042254813_87058575',
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
    'header2' => 0,
    'username' => 0,
    'ID' => 0,
    'Fullname' => 0,
    'pjob' => 0,
    'ks1' => 0,
    'ks2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571fa0423e9841_37400475',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571fa0423e9841_37400475')) {
function content_571fa0423e9841_37400475 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>Messaging App</title>
	   <link rel="stylesheet" type="text/css" href="ham.css"/>
    </head>
    <body>
        
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" >Home</a></li>
					<li><a class="active" href="profile.php" >My Profile</a></li>
				    <li><a href="inbox.php" >Inbox</a></li>
					
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
					
				</ul>
			</div>
		</div>
		
		<div class="hbg">
			<div class="hbg2">
				<h1 id="header">My Profile</h1>
			</div>
		
		
		
		
		
		<div class="content">
      <h3>Welcome warsame</h3>
      <table class="center">
        <tr>
          <th colspan="6">Your Details</th>
        </tr>
        <tr>
          <th>Username</th>
          <th>User Id</th>
          <th>Full Name</th>
		  <th>Previous Job</th>
		  <th>Key Skill One</th>
		  <th>Key Skill Two</th>
		
        </tr>
          <tr>
            <td>warsame</td>
            <td>28</td>
            <td>warsame</td>
			      <td></td>
      			<td></td>
      			<td></td>
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
   <div id="menu-outer">
	    <div class="table">
	        <ul id="profile">
                <li><a href="uprofile.php">Update Profile</a></li>
		        <li><a href="delete.php">Delete Account</a></li>
                <li><a href="search.php">Search Users</a></li>
             </ul>
		</div>
	</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>