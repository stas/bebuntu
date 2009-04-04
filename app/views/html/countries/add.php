<?php load_partial("admin_menu");?>
<div class="help">
	<ul>
		<li><?php echo getLink("Show countries", "countries/all") ?></li>
	</ul>
</div>
<form id="newcountry" action="" method="post">
	<input name="action" value="newcountry" type="hidden"/>
	<label for="name">New country name:</label>
	<input type="text" name="name" />
	<p style="clearall">
		<input type="submit" name="create" value="Add" />
	</p>
</form>