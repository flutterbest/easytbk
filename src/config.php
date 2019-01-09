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
        'app_key' => env ('TAOBAO_APP_KEY', 'APP KEY'),
        'app_secret' => env ('TAOBAO_APP_SECRET', 'APP SECRET'),
        'format' => 'json',
    ],
    'pinduoduo' => [
        'client_id' => env ('PDD_CLIENT_ID', 'APP KEY'),
        'client_secret' => env ('PDD_CLIENT_SECRET', 'APP SECRET'),
        'format' => 'json',
    ],
    'jingdong' => [
        'app_key' => env ('JD_APP_KEY', 'APP KEY'),
        'app_secret' => env ('JD_APP_SECRET', 'APP SECRET'),
        'format' => 'json',
    ]

];
