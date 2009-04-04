<?php load_partial("admin_menu");?>
<div class="help">
	<ul>
		<li><?php echo getLink("Add administrators", "admin/add") ?></li>
	</ul>
</div>
<div class="admins">
    <?php if(!empty($all_admins)): ?>
    <ul>
        <?php foreach($all_admins as $admin): ?>
            <li>
                <?php load_partial('admin') ?>
            </li>
        <?php endforeach ?>
    </ul>
    <?php else: ?>
        <?php echo "<p>No administrators were added</p>" ?>
    <? endif ?>
</div>