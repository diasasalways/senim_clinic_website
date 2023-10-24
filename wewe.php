<?php
/**
 * This example illustrates how to send single SMS message using Mobizon API.
 *
 * API documentation: https://help.mobizon.com/help/api-docs
 */

include 'MobizonApi.php';
$api = new Mobizon\MobizonApi('kzaade29a80992a24158ccf37b41a45c1d35573a2eb6adf1eabe11e5f00798743765d1', 'api.mobizon.kz');

// API call to send a message
if ($api->call('message',
    'sendSMSMessage',
    array(
        // Recipient international phone number
        'recipient' => '77712305734',
        // Message text
        'text' => 'Test sms message',
        // Alphaname is optional, if you don't have registered alphaname, just skip this parameter and your message will be sent with our free common alphaname, if it's available for this direction.
         //'from' => 'YourAlpha',
         // Message will be expired after 1440 min (24h)
         'params[validity]' => 1440
    ))
) {
    // Get message ID assigned by our system to request it's delivery report later.
    $messageId = $api->getData('messageId');

    if (!$messageId) {
        // Message is not accepted, see error code and data for details.
    }
    // Message has been accepted by API.
} else {
    // An error occurred while sending message
    echo '[' . $api->getCode() . '] ' . $api->getMessage() . 'See details below:' . PHP_EOL . print_r($api->getData(), true) . PHP_EOL;
}

?>