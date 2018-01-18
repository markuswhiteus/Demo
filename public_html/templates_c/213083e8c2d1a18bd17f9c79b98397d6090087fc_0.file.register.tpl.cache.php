<?php /* Smarty version 3.1.27, created on 2016-04-26 17:46:28
         compiled from "/home/stud/1/1428269/public_html/templates/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1065708870571f9b64660894_58090835%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '213083e8c2d1a18bd17f9c79b98397d6090087fc' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/register.tpl',
      1 => 1460644593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065708870571f9b64660894_58090835',
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
  'unifunc' => 'content_571f9b6469b3d6_40090288',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9b6469b3d6_40090288')) {
function content_571f9b6469b3d6_40090288 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1065708870571f9b64660894_58090835';
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
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
			</div>
			
		</div>
		<div class="content">
			<form action='' method='post'>
        <label>Username: <input type='text' name='username'> </label>
        <label>Password: <input type='password' name='password'> </label>
        <label>Name: <input type='text' name='name'> </label>
        <input type='submit' value='Register' name='register'>   
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>