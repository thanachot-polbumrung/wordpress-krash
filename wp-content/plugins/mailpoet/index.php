<?php
/ เพิ่มโค้ดนี้ใน functions.php ของธีมหรือในปลั๊กอินของคุณ
add_action('mailpoet_subscriber_created', function($subscriber_id) {
    $subscriber = \MailPoet\API\API::MP('v1')->getSubscriber($subscriber_id);

    $zapier_webhookurl = 'https://hooks.zapier.com/hooks/catch/22231243/2enrfak/';

    wp_remote_post($zapier_webhook_url, [
        'body' => json_encode($subscriber),
        'headers' => ['Content-Type' => 'application/json']
    ]);
});