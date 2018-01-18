<?php
/*%%SmartyHeaderCode:408086332571f9cc0a5bcf6_01280188%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7935b506225d76b29388e3e8c3faa464f729fec0' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/read.tpl',
      1 => 1461687689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '408086332571f9cc0a5bcf6_01280188',
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
    'Sender' => 0,
    'Subject' => 0,
    'Message' => 0,
    'mid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9cc0ac1129_55275034',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9cc0ac1129_55275034')) {
function content_571f9cc0ac1129_55275034 ($_smarty_tpl) {
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
				    <li><a class="active" href="inbox.php" >Inbox</a></li>
					<li><a href="acp.php" >Admin</a></li>
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">Inbox</h1>
			</div>
			
		</div>
		<div class="content">
      <h3>Welcome joe1</h3>
      <table class="center">
        <tr>
          <th colspan="2">Messages</th>
        </tr>
        <tr>
          <th>Sender</th>
          <th>Subject</th>
        </tr>

        <tr>
            <td>Markus</td>
            <td>Hello</td>
        </tr>
    
	    <tr>
	        <td id="boxmsg" colspan="2">This is a test Message</td>
	    </tr>
      </table>
      </div>
	  
	  <div id="menu-outer">
	    <div class="table">
	        <ul id="profile">
                <li><a href="compose.php?user=Markus&sub=Hello">Reply</a></li>
                <li><a href="flag.php?mid=1">Flag Message</a></li>
             </ul>
		</div>
	</div>

	  
	
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>