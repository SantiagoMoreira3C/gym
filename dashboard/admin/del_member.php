<?php
require '../../include/db_conn.php';
page_protect();

$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM users WHERE userid='$msgid'");
    echo "<html><head><script>alert('El proceso se ha realizado correctamente');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
} else {
    echo "<html><head><script>alert('ERROR! No se ha podido realizar el proceso');</script></head></html>";
   echo "error".mysqli_error($con);
}

?>