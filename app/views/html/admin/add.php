<?php load_partial("admin_menu");?>
<div class="help">
	<ul>
		<li><?php echo getLink("Show administrators", "admin/all") ?></li>
	</ul>
</div>
<form id="newuser" action="" method="post">
	<input name="action" value="newuser" type="hidden"/>
	<label for="nickname">User nickname:</label>
	<input type="text" name="nickname" />
	<label for="email">User email address:</label>
	<input type="text" name="email" />
	<label for="fullname">User full name:</label>
	<input type="text" name="fullname" />
	<p style="clearall">
		<input type="submit" name="create" value="Add" />
	</p>
</form>
