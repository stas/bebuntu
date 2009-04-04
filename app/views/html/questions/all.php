<?php load_partial("admin_menu");?>
<div class="help">
	<ul>
		<li><?php echo getLink("Add Questions", "questions/add") ?></li>
	</ul>
</div>

<div class="questions">
    <?php if(!empty($all_questions)): ?>
    <ul>
        <?php foreach($all_questions as $question): ?>
            <li>
                <?php load_partial('question') ?>
            </li>
        <?php endforeach ?>
    </ul>
    <?php else: ?>
        <?php echo "<p>No questions were added</p>" ?>
    <? endif ?>
</div>
