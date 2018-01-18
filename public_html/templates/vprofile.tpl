                                <!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>{$title}</title>
	   <link rel="stylesheet" type="text/css" href="{$css}.css"/>
    </head>
    <body>
        
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
		</div>
		
		<div class="hbg">
			<div class="hbg2">
				<h1 id="header">{$header}</h1>
			</div>
		
		
		
		
		
		<div class="content">
      <h3>{$header2}</h3>
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
            <td>{$vuser}</td>
            <td>{$ID}</td>
            <td>{$Fullname}</td>
			      <td>{$pjob}</td>
      			<td>{$ks1}</td>
      			<td>{$ks2}</td>
          </tr>
      </table>
   </div>
   <div id="menu-outer">
	    <div class="table">
	        <ul id="vprofile">
                <li><a href="compose.php?sendto={$vuser}">Compose Message</a></li>
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
</html>