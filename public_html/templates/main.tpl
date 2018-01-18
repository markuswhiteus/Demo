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
					<li><a class="active" href="index.php" >{$link1}</a></li>
					<li><a href="{$url}" >{$link5}</a></li>
					{$link2}
                   {$alink}
					<ul style="float:right;list-style-type:none;">
					<li><a href="{$url2}">{$link3}</a></li>
				</ul>
			</div>
			<div class="hbg2">
				<h1 id="header">{$header}</h1>
			</div>
			
		</div>
		<div class="content">
      <h3 class="uname">{$header2}</h3>
			<p>{$content}</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html>