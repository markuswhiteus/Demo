<?php /* Smarty version 3.1.27, created on 2016-04-26 17:45:57
         compiled from "/home/stud/1/1428269/public_html/templates/aprofile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:208445169571f9b452c5c32_03685996%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a263b03979ee3178a42b5c9cd503152e0ea591' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/aprofile.tpl',
      1 => 1461680795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208445169571f9b452c5c32_03685996',
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
    'vuser' => 0,
    'ID' => 0,
    'Fullname' => 0,
    'pjob' => 0,
    'ks1' => 0,
    'ks2' => 0,
    'UID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571f9b4530e249_17959772',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f9b4530e249_17959772')) {
function content_571f9b4530e249_17959772 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '208445169571f9b452c5c32_03685996';
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
		</div>
		
		<div class="hbg">
			<div class="hbg2">
				<h1 id="header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
			</div>
		
		
		
		
		
		<div class="content">
      <h3><?php echo $_smarty_tpl->tpl_vars['header2']->value;?>
</h3>
      <table class="center">
        <tr>
          <th colspan="6">User Details</th>
        </tr>
        <tr>
          <th>Username</th>
          <th>User Id</th>
          <th>Full Name</th>
		  <th>Previous Job</th>
		  <th>Key Skill One</th>
		  <th>Key Skill Two</th>
		
        </tr>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['vuser']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Fullname']->value;?>
</td>
			      <td><?php echo $_smarty_tpl->tpl_vars['pjob']->value;?>
</td>
      			<td><?php echo $_smarty_tpl->tpl_vars['ks1']->value;?>
</td>
      			<td><?php echo $_smarty_tpl->tpl_vars['ks2']->value;?>
</td>
          </tr>
      </table>
   </div>
   <div id="menu-outer">
	    <div class="table">
	        <ul id="vprofile">
                <li><a href="compose.php?sendto=<?php echo $_smarty_tpl->tpl_vars['vuser']->value;?>
">Compose Message</a></li>
			          <li><a href="ban.php?UID=<?php echo $_smarty_tpl->tpl_vars['UID']->value;?>
">Ban User</a></li>
             </ul>
		</div>
	</div>
   <div id="menu-outer">
	    <div class="table">
	        <ul id="profile">
                 <li><a href="search.php">Search Users</a></li>
             </ul>
		</div>
	</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>