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
	    <div class="table">
	        <ul id="profile">
                <li><a href="ainbox.php">Flagged Messages</a></li>
				        <li><a href="asearch.php">Search Users</a></li>
             </ul>
		</div>
	</div>
   <div id="menu-admin">
		
		<div id="bottombar" > </div>
    </body>
</html>