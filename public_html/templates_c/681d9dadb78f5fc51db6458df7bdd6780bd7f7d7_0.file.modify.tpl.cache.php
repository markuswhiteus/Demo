<?php /* Smarty version 3.1.27, created on 2016-04-26 17:33:27
         compiled from "/home/stud/1/1428269/public_html/templates/modify.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2125917477571f9857c8f137_91696578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681d9dadb78f5fc51db6458df7bdd6780bd7f7d7' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/modify.tpl',
      1 => 1460644592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125917477571f9857c8f137_91696578',
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'link1' => 0,
    'url' => 0,
    'link5' => 0,
    'alink' => 0,
    'header' => 0,
    'header2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9857cdd6c8_25068872',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9857cdd6c8_25068872')) {
function content_571f9857cdd6c8_25068872 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2125917477571f9857c8f137_91696578';
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
					<?php echo $_smarty_tpl->tpl_vars['alink']->value;?>

					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
			</div>
			
		</div>
		<div class="content">
      <h3><?php echo $_smarty_tpl->tpl_vars['header2']->value;?>
</h3>
			<form action='' method='post'>
              <label><span>New Username:</span> <input type='text' name='newusername'></label>
              <input type='submit' value='Change Username' name='changename'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>