<?php
    global $question;
?>
<p class="admin" id="<?php echo "admin_".$question->id; ?>">
    <span class="delete"><?php echo getLink('Delete this', 'questions/delete/'.$question->id); ?></span>
    <span class="title"><?php echo $question->title; ?></span>
    <span class="explanation"><?php echo $question->explanation; ?></span>
</p>