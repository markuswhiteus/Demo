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
					<ul style="float:right;list-style-type:none;">
					<li><a href="register.php" >Register!</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">{$header}</h1>
			</div>
			
		</div>
		<div class="content">
			<form action='' method='post'>
              <label><span>Username:</span> <input type='text' name='username'></label>
              <label>Password: <input type='password' name='password'></label>
              <input type='submit' value='Login' name='login'>
      </form>
	  
		</div>
		<div id="bottombar" > </div>
    </body>
</html>