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
					<li><a class="active" href="compose.php" >{$link3}</a></li>
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
			<form action='' method='post'>
        <label><span>Recepient:</span> <input type='text' name='sendto' value='{$sendto}'></label>
			  <label><span>Subject:</span> <input type='text' name='sub' value='{$subject}'></label>
			  <label><span>Message:</span> <textarea class="compose" name="msg"></textarea></label>
        <input type='submit' value='Send' name='send'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html>