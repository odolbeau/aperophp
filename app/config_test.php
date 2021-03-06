<?php

$app['debug']  = true;
$app['locale'] = 'fr';

$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'dbname'   => 'aperophp_test',
    'user'     => $app['db.options']['user'],
    'password' => $app['db.options']['password'],
);

$app['swiftmailer.transport'] = new \Swift_Transport_NullTransport($app['swiftmailer.transport.eventdispatcher']);
