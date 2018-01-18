<?php /* Smarty version 3.1.27, created on 2016-04-26 17:56:49
         compiled from "/home/stud/1/1428269/public_html/templates/ainbox.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1296583432571f9dd1051535_43636290%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da6b3c2b2985c61d462f3a1b2335b6ec9d04523c' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/ainbox.tpl',
      1 => 1461688357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296583432571f9dd1051535_43636290',
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
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9dd10c7ae9_99142904',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9dd10c7ae9_99142904')) {
function content_571f9dd10c7ae9_99142904 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1296583432571f9dd1051535_43636290';
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
      <table class="center">
        <tr>
          <th colspan="3">Flagged Messages</th>
        </tr>
        <tr>
          <th>Sender</th>
          <th>Recipient</th>
		  <th>Subject</th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Sender'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Recipient'];?>
</td>
			<td><a class=ured href="read.php?mid=<?php echo $_smarty_tpl->tpl_vars['item']->value['MID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['Subject'];?>
</a></td>
          </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
        
      </table>
      </div>
	 
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>