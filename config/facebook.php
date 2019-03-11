<?php
/**
 * Created by PhpStorm.
 * User: goma
 * Date: 2019-03-12
 * Time: 00:26
 */
return [
    'config' => [
        'app_id' => env('FACEBOOK_KEY', null),
        'app_secret' => env('FACEBOOK_SECRET', null),
        'default_graph_version' => env('FACEBOOK_DEFAULT_GRAPH_VERSION', 'v2.8'),
    ],
];