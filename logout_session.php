<?php
session_start();
session_unset();
echo "<script>alert('Session Destroyed!...');</script>";
echo "<script>location.href='HomePage.php'</script>";
?>