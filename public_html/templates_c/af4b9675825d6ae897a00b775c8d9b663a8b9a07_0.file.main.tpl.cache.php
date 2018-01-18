<?php /* Smarty version 3.1.27, created on 2016-04-26 18:07:27
         compiled from "/home/stud/1/1428269/public_html/templates/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1466833963571fa04fa011f0_64568253%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4b9675825d6ae897a00b775c8d9b663a8b9a07' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/main.tpl',
      1 => 1460644592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466833963571fa04fa011f0_64568253',
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'link1' => 0,
    'url' => 0,
    'link5' => 0,
    'link2' => 0,
    'alink' => 0,
    'url2' => 0,
    'link3' => 0,
    'header' => 0,
    'header2' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571fa04fa3efb6_60726413',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571fa04fa3efb6_60726413')) {
function content_571fa04fa3efb6_60726413 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1466833963571fa04fa011f0_64568253';
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
					<li><a class="active" href="index.php" ><?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
</a></li>
					<?php echo $_smarty_tpl->tpl_vars['link2']->value;?>

                   <?php echo $_smarty_tpl->tpl_vars['alink']->value;?>

					<ul style="float:right;list-style-type:none;">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
			</div>
			
		</div>
		<div class="content">
      <h3 class="uname"><?php echo $_smarty_tpl->tpl_vars['header2']->value;?>
</h3>
			<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>