<?php load_partial("admin_menu");?>
<div class="help">
	<ul>
		<li><?php echo getLink("Add countries", "countries/add") ?></li>
	</ul>
</div>
<div class="countries">
    <?php if(!empty($all_countries)): ?>
    <ul>
        <?php foreach($all_countries as $country): ?>
            <li>
                <?php load_partial('country') ?>
            </li>
        <?php endforeach ?>
    </ul>
    <?php else: ?>
        <?php echo "<p>No countries were added</p>" ?>
    <? endif ?>
</div>