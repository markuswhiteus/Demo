<?php /* Smarty version 3.1.27, created on 2016-04-26 18:07:21
         compiled from "/home/stud/1/1428269/public_html/templates/inbox.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1665993711571fa04969c283_44815914%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac607d29640d009d6349153517c7fc4fb49ed178' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/inbox.tpl',
      1 => 1461688278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1665993711571fa04969c283_44815914',
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
  'unifunc' => 'content_571fa0496e8e40_54612332',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571fa0496e8e40_54612332')) {
function content_571fa0496e8e40_54612332 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1665993711571fa04969c283_44815914';
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
				    <li><a class="active" href="inbox.php" ><?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
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
		<div class="msgcontent">
      <table class="center">
        <tr>
          <th colspan="2">Your Details</th>
        </tr>
        <tr>
          <th>Sender</th>
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
	  <div id="menu-outer">
	    <div class="table">
	        <ul id="profile">
                <li><a href="compose.php">Compose Message</a></li>
             </ul>
		</div>
	</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>