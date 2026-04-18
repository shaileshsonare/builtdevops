<?php
session_start();

// Initialize or increment counter
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

echo "<h1>PHP Session Test</h1>";
echo "<p><b>Counter:</b> " . $_SESSION['counter'] . "</p>\n";
echo "<p><b>Pod Name:</b> " . gethostname() . "</p>\n";
echo "<p><b>Timestamp:</b> " . date('Y-m-d H:i:s') . "</p>\n";
echo "\n";
?>
