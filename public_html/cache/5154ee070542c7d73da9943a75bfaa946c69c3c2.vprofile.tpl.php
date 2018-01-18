<?php
/*%%SmartyHeaderCode:807505592571f9b64a786a0_46981871%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5154ee070542c7d73da9943a75bfaa946c69c3c2' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/vprofile.tpl',
      1 => 1461677631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807505592571f9b64a786a0_46981871',
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
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9b64af4565_69414955',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9b64af4565_69414955')) {
function content_571f9b64af4565_69414955 ($_smarty_tpl) {
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
      <h3>Markus Profile</h3>
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
            <td>Markus</td>
            <td>2</td>
            <td>Mark</td>
			      <td>123415</td>
      			<td>HTML</td>
      			<td>CSS</td>
          </tr>
      </table>
   </div>
   <div id="menu-outer">
	    <div class="table">
	        <ul id="vprofile">
                <li><a href="compose.php?sendto=Markus">Compose Message</a></li>
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