<?php
/*
 * This file is part of Laravel Taobao Top Client.
 *
 * (c) niugengyun <515343909@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
return [
    'taobao' => [
        'app_key' => env ('TAOBAO_APP_KEY', '25660213'),
        'app_secret' => env ('TAOBAO_APP_SECRET', 'd3a6a3ea6668e4b8f1e0bc9bd3a1650b'),
        'redirect_url' => env ('TAOBAO_REDIRECT_URI', 'http://ht.test/callback'),
        'format' => 'json',
    ],
    'pinduoduo' => [
        'client_id' => env ('PDD_CLIENT_ID', '74f24c204a994dabb89f6b94c08c48a3'),
        'client_secret' => env ('PDD_CLIENT_SECRET', '92ff1f13aa9be0a166f9513ee25016d34e81fd29'),
        'format' => 'json',
    ],
    'jingdong' => [
        'app_key' => env ('JD_APP_KEY', '9357e9ece6b6476db183967e7ea5e892'),
        'app_secret' => env ('JD_APP_SECRET', '27ed5eb361184677b14e3075a01e1d88'),
        'format' => 'json',
    ]

];
