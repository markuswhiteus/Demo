<?php
/*%%SmartyHeaderCode:208445169571f9b452c5c32_03685996%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a263b03979ee3178a42b5c9cd503152e0ea591' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/aprofile.tpl',
      1 => 1461680795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208445169571f9b452c5c32_03685996',
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
    'vuser' => 0,
    'ID' => 0,
    'Fullname' => 0,
    'pjob' => 0,
    'ks1' => 0,
    'ks2' => 0,
    'UID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9b4532c091_63973237',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9b4532c091_63973237')) {
function content_571f9b4532c091_63973237 ($_smarty_tpl) {
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
					<li><a href="profile.php" >My Profile</a></li>
				    <li><a href="inbox.php" >Inbox</a></li>
					<li><a href="acp.php" >Admin</a></li>
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
					
				</ul>
			</div>
		</div>
		
		<div class="hbg">
			<div class="hbg2">
				<h1 id="header">User Profile</h1>
			</div>
		
		
		
		
		
		<div class="content">
      <h3>Test Profile</h3>
      <table class="center">
        <tr>
          <th colspan="6">User Details</th>
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
            <td>Test</td>
            <td>16</td>
            <td>test</td>
			      <td></td>
      			<td></td>
      			<td></td>
          </tr>
      </table>
   </div>
   <div id="menu-outer">
	    <div class="table">
	        <ul id="vprofile">
                <li><a href="compose.php?sendto=Test">Compose Message</a></li>
			          <li><a href="ban.php?UID=16">Ban User</a></li>
             </ul>
		</div>
	</div>
   <div id="menu-outer">
	    <div class="table">
	        <ul id="profile">
                 <li><a href="search.php">Search Users</a></li>
             </ul>
		</div>
	</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>