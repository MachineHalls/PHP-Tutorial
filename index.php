<?php
require_once 'core/init.php';

$userInsert = DB::getInstance()->update('users', 3, array(
    'password' => 'newpassword',
    'name' => 'Stephen Hawking'
));

?>

<!--
<!DOCTYPE html>
<html>
<head></head>
<body>
<p>This is a test.<p>
</body>
</html>
-->