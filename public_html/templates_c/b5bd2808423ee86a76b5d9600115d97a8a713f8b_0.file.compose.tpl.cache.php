<?php /* Smarty version 3.1.27, created on 2016-04-26 18:07:23
         compiled from "/home/stud/1/1428269/public_html/templates/compose.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:406023120571fa04b3d9996_33835788%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5bd2808423ee86a76b5d9600115d97a8a713f8b' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/compose.tpl',
      1 => 1461688776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406023120571fa04b3d9996_33835788',
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'link1' => 0,
    'url' => 0,
    'link5' => 0,
    'link2' => 0,
    'link3' => 0,
    'alink' => 0,
    'header' => 0,
    'sendto' => 0,
    'subject' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571fa04b41beb3_83272752',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571fa04b41beb3_83272752')) {
function content_571fa04b41beb3_83272752 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '406023120571fa04b3d9996_33835788';
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
					<li><a href="inbox.php" ><?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
</a></li>
					<li><a class="active" href="compose.php" ><?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
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
			<form action='' method='post'>
        <label><span>Recepient:</span> <input type='text' name='sendto' value='<?php echo $_smarty_tpl->tpl_vars['sendto']->value;?>
'></label>
			  <label><span>Subject:</span> <input type='text' name='sub' value='<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
'></label>
			  <label><span>Message:</span> <textarea class="compose" name="msg"></textarea></label>
        <input type='submit' value='Send' name='send'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>