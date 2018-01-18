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
              <label><span>Previous Job:</span> <input type='text' name='pjob'></label>
			  <label><span>Key Skill One:</span> <input type='text' name='ks1'></label>
			  <label><span>Key Skill Two:</span> <input type='text' name='ks2'></label>
              <input type='submit' value='Update' name='update'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html>