<?php /* Smarty version 3.1.27, created on 2016-04-26 17:51:06
         compiled from "/home/stud/1/1428269/public_html/templates/search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:960719464571f9c7a417c54_20832799%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e81070950b0831f9e51f3fd20e97032ab4e6fc2' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/search.tpl',
      1 => 1461676300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '960719464571f9c7a417c54_20832799',
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'link1' => 0,
    'url' => 0,
    'link5' => 0,
    'alink' => 0,
    'header' => 0,
    'nouser' => 0,
    'th1' => 0,
    'th2' => 0,
    'th3' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9c7a470755_49802426',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9c7a470755_49802426')) {
function content_571f9c7a470755_49802426 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '960719464571f9c7a417c54_20832799';
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
			<form action='' method='post'>
              <label><span>Username:</span> <input type='text' name='searchusername'></label>
              <input type='submit' value='Search' name='search'>              
      </form>
      <p><?php echo $_smarty_tpl->tpl_vars['nouser']->value;?>
</p>
      <table class= "center">
        <tr>
          <th><?php echo $_smarty_tpl->tpl_vars['th1']->value;?>
</th>
          <th><?php echo $_smarty_tpl->tpl_vars['th2']->value;?>
</th>
          <th><?php echo $_smarty_tpl->tpl_vars['th3']->value;?>
</th>
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
            <td><a class=ured href="vprofile.php?uid=<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['Username'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Fullname'];?>
</td>
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