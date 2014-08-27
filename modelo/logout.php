<?php
session_start();

session_destroy();
echo 'Ha terminado la sesi&oacute;n <p><a href="../vista/index.php">index</a></p>';
?>
<SCRIPT type=""  LANGUAGE="javascript">
location.href = "../vista/index.php";
</SCRIPT>
<html>
<body>
</body>
</html>
<?