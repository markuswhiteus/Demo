<?php /* Smarty version 3.1.27, created on 2016-04-26 17:46:00
         compiled from "/home/stud/1/1428269/public_html/templates/ban.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:519181836571f9b48161533_05137359%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57ccdbed764f1dfaaffec6ebbcd408057328909e' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/ban.tpl',
      1 => 1461680771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '519181836571f9b48161533_05137359',
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
    'UID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9b4819cb38_27153704',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9b4819cb38_27153704')) {
function content_571f9b4819cb38_27153704 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '519181836571f9b48161533_05137359';
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
      <h3> Admin Control Panel</h3>
		</div>
		
		 <div id="menu-admin">
	   <form action='' method='post'>
              <label><span>User ID:</span> <input type='text' name='uid' value='<?php echo $_smarty_tpl->tpl_vars['UID']->value;?>
'></label>
              <input type='submit' value='Unban/Ban' name='ban'>
      </form>
	</div>
   <div id="menu-admin">
		
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>