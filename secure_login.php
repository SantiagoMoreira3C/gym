<?php
include './include/db_conn.php';

$user_id_auth = ltrim($_POST['user_id_auth']);
$user_id_auth = rtrim($user_id_auth);

$pass_key = ltrim($_POST['pass_key']);
$pass_key = rtrim($pass_key);

$user_id_auth = stripslashes($user_id_auth);
$pass_key     = stripslashes($pass_key);

if ($pass_key == "" && $user_id_auth == "") {
    echo "<head><script>alert('Usuario y Contraseña no pueden estar vacíos');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} else if ($pass_key == "") {
    echo "<head><script>alert('Contraseña no puede estar vacía');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} else if ($user_id_auth == "") {
    echo "<head><script>alert('Usuario no puede estar vacío');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} else {
    include './include/db_conn.php';

    $user_id_auth = mysqli_real_escape_string($con, $user_id_auth);
    $pass_key     = mysqli_real_escape_string($con, $pass_key);
    $sql          = "SELECT * FROM admin WHERE username='$user_id_auth' and pass_key='$pass_key'";
    $result       = mysqli_query($con, $sql);
    $count        = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        // store session data
        $_SESSION['user_data']  = $user_id_auth;
        $_SESSION['logged']     = "start";
        $_SESSION['full_name']  = $user_id_auth;
        $_SESSION['username']   = $row['Full_name'];
        header("location: ./dashboard/admin/");
    } else {
        echo "<html><head><script>alert('Usuario o Contraseña Inválidos');</script></head></html>";
        include 'index.php';
    }
}
?>
