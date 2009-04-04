<?php
    global $admin;
?>
<p class="admin" id="<?php echo "admin_".$admin->id; ?>">
    <span class="nickname"><?php echo $admin->nickname; ?></span>
    <span class="email"><?php echo $admin->email; ?></span>
    <span class="fullname"><?php echo $admin->fullname; ?></span>
</p>