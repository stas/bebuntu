<?php load_partial("admin_menu");?>
<div class="help">
	<ul>
		<li><?php echo getLink("Show Teams", "teams/all") ?></li>
	</ul>
</div>
<form id="newteam" action="" method="post">
	<input name="action" value="newteam" type="hidden"/>
	<label for="name">Team name:</label>
            <input type="text" name="name" />
	<label for="description">Team Description:</label>
            <textarea name="description" ></textarea>
	<label for="email">Team email:</label>
            <input type="text" name="email" />
	<label for="homepage">Team homepage:</label>
            <input type="text" name="homepage" />
	<label for="mailinglist">Team mailing list:</label>
            <input type="text" name="mailinglist" />
	<label for="irc">Team irc server and channel:</label>
            <input type="text" name="irc" />
	<label for="location">Team location:</label>
            <input type="text" name="irc" />
	<label for="country_id">Team country:</label>
            <select name="country_id" >
                <?php load_partial('select_countries') ?>
            </select>
	<label for="submiter">Submiter (your) email or launchpad link:</label>
            <input type="text" name="submiter" />
	<p style="clearall">
		<input type="submit" name="create" value="Add" />
	</p>
</form>