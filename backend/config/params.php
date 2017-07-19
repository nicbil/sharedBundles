<?php
return [
    'adminEmail' => 'admin@example.com',
    'myUrl' => [
        'auth' => 'https://'.(YII_ENV === 'prod' ? 'auth.missa.life.com.by' : 'missaauthtest.life.com.by').'/oauth/token',
        'yandex_geo' => 'http://'.(YII_ENV === 'prod' ? '172.16.211.156' : 'tst-tgw-01').':8220/astelit-om-ws/om-services/om?wsdl',
    ],
];
