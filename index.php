<?php echo "Hello World!"; ?><br/>

<?php echo "You need to properly configure your DNS."; ?><br/>

<?php
// Specify the path to your log file here
$logFile = '/home/LogFiles/logfile.log';

// Get the visitor's IP address
if (isset($_SERVER['HTTP_X_CLIENT_IP'])) {
    $ipAddress = $_SERVER['HTTP_X_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipAddress = $_SERVER['REMOTE_ADDR'];
}

// Log data
$logData = [
    'Date & Time' => date('Y-m-d H:i:s'),
    'IP Address' => $ipAddress,
    'User Agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Not Available',
    'Request Method' => $_SERVER['REQUEST_METHOD'] ?? 'Not Available',
    'Request URI' => $_SERVER['REQUEST_URI'] ?? 'Not Available',
    'Query String' => $_SERVER['QUERY_STRING'] ?? 'Not Available',
    'Referrer' => $_SERVER['HTTP_REFERER'] ?? 'Not Available'
    // Add more elements as needed
];

// Write log data to the specified log file
error_log(json_encode($logData) . PHP_EOL, 3, $logFile);
?>

<?php echo "c557f380f2a0d08e0da03343c978cfe439ecaf31afd57c539f832e862b418a02"; ?>
<?php /* subdomain takeover by petrescu */ ?>
