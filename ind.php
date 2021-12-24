<?php
    use YooKassa\Client;

    $client = new Client();
    $client->setAuth('<867315>', '<test_j0Oso70m9JPGhk2V3Dpp0fkHIOai4rBSbRubX7sYQEM>');
    $payment = $client->createPayment(
        array(
            'amount' => array(
                'value' => 100.0,
                'currency' => 'RUB',
            ),
            'confirmation' => array(
                'type' => 'redirect',
                'return_url' => 'https://www.merchant-website.com/return_url',
            ),
            'capture' => true,
            'description' => 'Заказ №1',
        ),
        uniqid('', true)
    );
?>
