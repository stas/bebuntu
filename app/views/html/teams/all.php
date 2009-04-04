<?php load_partial("admin_menu");?>
<div class="help">
	<ul>
		<li><?php echo getLink("Add Teams", "teams/add") ?></li>
	</ul>
</div>

<div class="teams">
    <?php if(!empty($all_teams)): ?>
    <ul>
        <?php foreach($all_teams as $teams): ?>
            <li>
                <?php load_partial('teams') ?>
            </li>
        <?php endforeach ?>
    </ul>
    <?php else: ?>
        <?php echo "<p>No teams were added</p>" ?>
    <? endif ?>
</div>