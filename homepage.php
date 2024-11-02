<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<div style='position: absolute; top: 10px; right: 10px;'>";
    echo "<span>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</span> ";
    echo "<a href='logout.php'>Logout</a>";
    echo "</div>";
} else {
    header("Location: login_form.html"); // Redirect to login form if not logged in
    exit();
}
?>
