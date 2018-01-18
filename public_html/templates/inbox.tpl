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
				    <li><a class="active" href="inbox.php" >{$link2}</a></li>
					{$alink}
					<ul style="float:right;list-style-type:none;">
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">{$header}</h1>
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
        {foreach from=$data item=item key=key}
          <tr>
            <td>{$item.Sender}</td>
            <td><a class=ured href="read.php?mid={$item.MID}">{$item.Subject}</a></td>
          </tr>
        {/foreach}
        
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
</html>