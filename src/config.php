<?php
/*
 *  easytbk多联盟配置文件
 *
 *  Author: niugengyun <515343909@qq.com>
 *  Wechat：bugfixed
 *
 */
return [
    'taobao' => [ // 淘宝
        'app_key' => env ('TAOBAO_APP_KEY', ''),
        'app_secret' => env ('TAOBAO_APP_SECRET', ''),
        'format' => 'json',
    ],
    'pinduoduo' => [ // 拼多多
        'client_id' => env ('PDD_CLIENT_ID', ''),
        'client_secret' => env ('PDD_CLIENT_SECRET', ''),
        'format' => 'json',
    ],
    'jingdong' => [ // 京东
        'app_key' => env ('JD_APP_KEY', ''),
        'app_secret' => env ('JD_APP_SECRET', ''),
        'format' => 'json',
    ],
    'vip' => [  // 唯品会
        'app_key' => env ('VIP_APP_KEY', ''),
        'app_secret' => env ('VIP_APP_SECRET', ''),
        'access_token' => env ('VIP_APP_ACCESS_TOKEN', ''),
        'format' => 'json',
    ],
    'suning' => [  // 苏宁 https://open.suning.com/
        'app_key' => env ('SUNING_APP_KEY', ''),
        'app_secret' => env ('SUNING_APP_SECRET', ''),
        'format' => 'json',
    ],
];
