<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>{$title}</title>
	   <link rel="stylesheet" type="text/css" href="{$css}.css"/>
    </head>
    <body>
        <div class="hbg">
			
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" >{$link1}</a></li>
					<li><a href="{$url}" >{$link5}</a></li>
					<li><a href="inbox.php" >{$link2}</a></li>
					{$alink}
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
	
				<h1 id="header">{$header}</h1>
			</div>
			
		</div>
		<div class="content">
      <h3> Admin Control Panel</h3>
		</div>
		
		 <div id="menu-admin">
	   <form action='' method='post'>
              <label><span>User ID:</span> <input type='text' name='uid' value='{$UID}'></label>
              <input type='submit' value='Unban/Ban' name='ban'>
      </form>
	</div>
   <div id="menu-admin">
		
		<div id="bottombar" > </div>
    </body>
</html>