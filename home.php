<?php
session_start();
?>
<html>
<body>

Welcome to the HomePage . <?php echo $_SESSION["userName"] . ".<br>"; ?><br>


</body>
</html>