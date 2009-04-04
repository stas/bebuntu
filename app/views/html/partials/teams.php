<?php
    global $teams;
    global $countries;
    

        foreach ($countries as $country)
            if($teams->country_id == $country->data->id)
                $country_name = $country->data->name;
?>
<p class="team" id="<?php echo "team_".$teams->id; ?>">
    <span class="delete"><?php echo getLink('Delete this', 'teams/delete/'.$teams->id); ?></span>
    <span class="name"><?php echo $teams->name; ?></span>
    <span class="description"><?php echo $teams->description; ?></span>
    <span class="email"><?php echo $teams->email; ?></span>
    <span class="homepage"><?php echo $teams->homepage; ?></span>
    <span class="mailinglist"><?php echo $teams->mailinglist; ?></span>
    <span class="irc"><?php echo $teams->irc; ?></span>
    <span class="location"><?php echo $teams->location; ?></span>
    <span class="country_id"><?php echo $country_name; ?></span>
    <span class="submiter"><?php echo $teams->submiter; ?></span>
</p>