<?php
    use YooKassa\Client;

    $client = new Client();
    $client->setAuth('<855234>', '<test_BwgaxTHkUxTNYEx1nE3fjRFVjS8s1dfrIrTEB037BXA>');
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