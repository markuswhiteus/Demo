<?php /* Smarty version 3.1.27, created on 2016-04-26 18:07:12
         compiled from "/home/stud/1/1428269/public_html/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:785827596571fa0402ea798_57481675%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889a280fac1e27d28a0e5279a6d6c81dce460174' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/login.tpl',
      1 => 1461677437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '785827596571fa0402ea798_57481675',
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'link1' => 0,
    'url' => 0,
    'link5' => 0,
    'header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571fa040324795_22174904',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571fa040324795_22174904')) {
function content_571fa040324795_22174904 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '785827596571fa0402ea798_57481675';
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
.css"/>
    </head>
    <body>
        <div class="hbg">
			
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" ><?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
</a></li>
					<ul style="float:right;list-style-type:none;">
					<li><a href="register.php" >Register!</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
			</div>
			
		</div>
		<div class="content">
			<form action='' method='post'>
              <label><span>Username:</span> <input type='text' name='username'></label>
              <label>Password: <input type='password' name='password'></label>
              <input type='submit' value='Login' name='login'>
      </form>
	  
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>