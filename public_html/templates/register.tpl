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
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">{$header}</h1>
			</div>
			
		</div>
		<div class="content">
			<form action='' method='post'>
        <label>Username: <input type='text' name='username'> </label>
        <label>Password: <input type='password' name='password'> </label>
        <label>Name: <input type='text' name='name'> </label>
        <input type='submit' value='Register' name='register'>   
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html>