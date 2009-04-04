<?php
    global $country;
?>
<p class="country" id="<?php echo "country_".$country->id; ?>">
    <span class="delete"><?php echo getLink('Delete this', 'countries/delete/'.$country->id); ?></span>
    <span class="name"><?php echo $country->name; ?></span>
</p>