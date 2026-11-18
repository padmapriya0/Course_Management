<?php
session_start();
require 'db.php';

if (isset($_SESSION['user_id'])) {

    $stmt = $conn->prepare(
        "UPDATE users 
         SET active_sessions = IF(active_sessions > 0, active_sessions - 1, 0) 
         WHERE id = ?"
    );
    $stmt->bind_param("i", $_SESSION['user_id']);
    $stmt->execute();
    $stmt->close();
}

/* 🔔 Flash message */
$_SESSION['logout_success'] = true;

session_unset();
session_destroy();

/* Restart session ONLY to pass message */
session_start();
$_SESSION['logout_success'] = true;

header("Location: index.php");
exit;
