<?php
/*%%SmartyHeaderCode:706227272571f98cd45f8e3_86008278%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe21388fb5c8458918d4ddd11bef3ca8bbd89bbb' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/uprofile.tpl',
      1 => 1461688508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '706227272571f98cd45f8e3_86008278',
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
  'unifunc' => 'content_571f98cd4c8951_22920955',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f98cd4c8951_22920955')) {
function content_571f98cd4c8951_22920955 ($_smarty_tpl) {
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
	
				<h1 id="header">Update Profile</h1>
			</div>
			
		</div>
		<div class="content">
			<form action='' method='post'>
              <label><span>Previous Job:</span> <input type='text' name='pjob'></label>
			  <label><span>Key Skill One:</span> <input type='text' name='ks1'></label>
			  <label><span>Key Skill Two:</span> <input type='text' name='ks2'></label>
              <input type='submit' value='Update' name='update'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>