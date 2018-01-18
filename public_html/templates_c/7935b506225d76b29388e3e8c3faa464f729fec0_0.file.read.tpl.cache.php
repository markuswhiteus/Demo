<?php /* Smarty version 3.1.27, created on 2016-04-26 17:52:16
         compiled from "/home/stud/1/1428269/public_html/templates/read.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:408086332571f9cc0a5bcf6_01280188%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7935b506225d76b29388e3e8c3faa464f729fec0' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/read.tpl',
      1 => 1461687689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '408086332571f9cc0a5bcf6_01280188',
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
    'header2' => 0,
    'Sender' => 0,
    'Subject' => 0,
    'Message' => 0,
    'mid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9cc0aa20f0_28145629',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9cc0aa20f0_28145629')) {
function content_571f9cc0aa20f0_28145629 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '408086332571f9cc0a5bcf6_01280188';
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
		<div class="content">
      <h3><?php echo $_smarty_tpl->tpl_vars['header2']->value;?>
</h3>
      <table class="center">
        <tr>
          <th colspan="2">Messages</th>
        </tr>
        <tr>
          <th>Sender</th>
          <th>Subject</th>
        </tr>

        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Sender']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Subject']->value;?>
</td>
        </tr>
    
	    <tr>
	        <td id="boxmsg" colspan="2"><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</td>
	    </tr>
      </table>
      </div>
	  
	  <div id="menu-outer">
	    <div class="table">
	        <ul id="profile">
                <li><a href="compose.php?user=<?php echo $_smarty_tpl->tpl_vars['Sender']->value;?>
&sub=<?php echo $_smarty_tpl->tpl_vars['Subject']->value;?>
">Reply</a></li>
                <li><a href="flag.php?mid=<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">Flag Message</a></li>
             </ul>
		</div>
	</div>

	  
	
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>