<?php
include_once APPROOT . '/helpers/session_helper.php';
?>
<h1 class="header">Reset Password</h1>

<?php flash('reset') ?>

<form method="post" action=" <?php echo URLROOT ?>/Users/Reset" class="flex flex-col">
    <input type="hidden" name="type" value="send" />
    <input type="text" name="usersEmail" placeholder="Email...">
    <button type="submit" name="submit">Receive Email</button>
</form>