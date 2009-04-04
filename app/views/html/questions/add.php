<?php load_partial("admin_menu");?>
<div class="help">
	<ul>
		<li><?php echo getLink("Show Questions", "questions/all") ?></li>
	</ul>
</div>
<form id="newquestion" action="" method="post">
	<input name="action" value="newquestion" type="hidden"/>
	<label for="title">Title:</label>
	<input type="text" name="title" />
	<label for="explanation">Explanation:</label>
	<textarea name="explanation" ></textarea>
	<p style="clearall">
		<input type="submit" name="create" value="Add" />
	</p>
</form>