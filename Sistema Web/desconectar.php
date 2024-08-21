<?php
    session_start();
    if($_SESSION['correo']){
        session_destroy();
        echo "<script>location.href='login1.php'</script>";
    }
    else{
        "<script>location.href='login1.php'</script>";
    }
?>