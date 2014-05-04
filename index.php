<!DOCTYPE html>
<html lang="EN">
	<head>
		<title>Translate the Zombie Menu!</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/underground_nl.css">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/noob.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/noobys.js"></script>
	</head>
	<body>
		<h3>Translate the Zombie Menu</h3>
		<form accept-charset="utf-8" class="form-horizontal" style="width:50%;" role="form">
		  <div class="form-group">
			<label for="zversion" class="col-sm-3 control-label">Version</label>
			<div class="col-sm-7">
				<select name="zversion" id="zversion" onchange="loadzVersion();" class="form-control input-sm">
					<option value="" selected>Choose a version...</option>
					<option value="3-2">3.2</option>
				</select>
			</div>
		  </div>
		  <div class="form-group">
			<label for="zlangshortcut" class="col-sm-3 control-label">Language Shortcut</label>
			<div class="col-sm-7">
			  <input type="text" class="form-control input-sm" name="zlangshortcut" id="zlangshortcut" placeholder="Language Shortcut for example: EN for English">
			</div>
		  </div>
		  <!--<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Remember me
				</label>
			  </div>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-3 col-sm-7">
				<button type="submit" class="btn btn-default">Sign in</button>
			</div>
		  </div>-->
		  <div id="translationwrap">
		  </div>
		</form>

	</body>
</html>
<?php
	
?>