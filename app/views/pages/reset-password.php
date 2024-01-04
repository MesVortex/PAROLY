<?php
include_once APPROOT . '/helpers/session_helper.php';
?>
<h1 class="header">Reset Password</h1>

<?php flash('reset') ?>

<form method="post" action="./app/controllers/ResetPassword.php">
    <input type="hidden" name="type" value="send" />
    <input type="text" name="usersEmail" placeholder="Email...">
    <button type="submit" name="submit">Receive Email</button>
</form>