<?php
$host     = "localhost"; // Host name 
$username = "admin"; // Mysql username 
$password = "admin"; // Mysql password 
$db_name  = "id17504911_gimnasio"; // Database name 

// Connect to server and select database.
$con = mysqli_connect($host, $username, $password, $db_name);

if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}

?>

<?php
// Verificar si la función page_protect ya está definida
if (!function_exists('page_protect')) {
    function page_protect()
    {
        session_start();
        
        global $db;
        
        /* Secure against Session Hijacking by checking user agent */
        if (isset($_SESSION['HTTP_USER_AGENT'])) {
            if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
                session_destroy();
                echo "<meta http-equiv='refresh' content='0; url=../login/'>";
                exit();
            }
        }
        
        // Before we allow sessions, we need to check authentication key - ckey and ctime stored in the database
        
        /* If session not set, check for cookies set by Remember me */
        if (!isset($_SESSION['user_data']) && !isset($_SESSION['logged']) && !isset($_SESSION['auth_level'])) {
            session_destroy();
            echo "<meta http-equiv='refresh' content='0; url=../login/'>";
            exit();
        } else {
            
        }
    }
}
?>
