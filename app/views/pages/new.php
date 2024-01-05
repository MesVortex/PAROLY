<?php
include_once APPROOT . './helpers/session_helper.php';
?>
<h1 class="header">Enter New Password</h1>

<form action="<?php echo URLROOT ?>/Users/new" method="post">
    <input type="hidden" name="type" value="reset" />
    <input type="hidden" name="selector" value="<?php echo $selector ?>" />
    <input type="hidden" name="validator" value="<?php echo $validator ?>" />
    <input type="password" name="pwd" placeholder="Enter a new password...">
    <input type="password" name="pwd-repeat" placeholder="Repeat new password...">
    <button type="submit" name="submit">Receive Email</button>
</form>