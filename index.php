<?php echo "Hello World!"; ?><br/>

<?php echo "You need to properly configure your DNS."; ?><br/>
<?php
$logData = [
    'Date & Time' => date('Y-m-d H:i:s'),
    'IP Address' => $_SERVER['REMOTE_ADDR'] ?? 'Not Available',
    'User Agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Not Available',
    'Request Method' => $_SERVER['REQUEST_METHOD'] ?? 'Not Available',
    'Request URI' => $_SERVER['REQUEST_URI'] ?? 'Not Available',
    'Query String' => $_SERVER['QUERY_STRING'] ?? 'Not Available',
    'Referrer' => $_SERVER['HTTP_REFERER'] ?? 'Not Available'
    // Add more elements as needed
];

error_log(json_encode($logData));
?>

<?php echo "c557f380f2a0d08e0da03343c978cfe439ecaf31afd57c539f832e862b418a02"; ?>
<?php /* subdomain takeover by petrescu */ ?>
