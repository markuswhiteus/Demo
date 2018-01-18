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
              <label><span>Username:</span> <input type='text' name='searchusername'></label>
              <input type='submit' value='Search' name='search'>              
      </form>
      <p>{$nouser}</p>
      <table class= "center">
        <tr>
          <th>{$th1}</th>
          <th>{$th2}</th>
          <th>{$th3}</th>
        </tr> 
        {foreach from=$data item=item key=key}
          <tr>
            <td><a class=ured href="aprofile.php?uid={$item.ID}">{$item.Username}</a></td>
            <td>{$item.ID}</td>
            <td>{$item.Fullname}</td>
          </tr>
        {/foreach}
      </table>
		</div>
		<div id="bottombar" > </div>
    </body>
</html>