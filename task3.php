<?php
namespace SessionProvider;
function appendRand(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['data'])) {
        $data = $_SESSION['data'];
    } else {
        $data = "";
    }
    $data .= rand(0, 9);
    $_SESSION['data'] = $data;
}

?>