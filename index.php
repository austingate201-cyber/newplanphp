<?php
// Basic PHP example

$name = "World";
$time = date("H");

if ($time < 12) {
    $greeting = "Good morning";
} elseif ($time < 18) {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My PHP App</title>
</head>
<body>
    <h1><?php echo "$greeting, $name!"; ?></h1>
    <p>Current server time: <?php echo date("Y-m-d H:i:s"); ?></p>
</body>
</html>
