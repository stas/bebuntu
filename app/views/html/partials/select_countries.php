<?php
    global $countries;
    $sorted_countries = array();
    
    foreach ($countries as $country)
        $sorted_countries[$country->id] = $country->name;
        
    asort($sorted_countries);
    
    foreach ($sorted_countries as $key => $val)
        echo "<option value=\"$key\">$val</option>\n";
?>