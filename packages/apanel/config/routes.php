<?php
/**
 * NomiCMS - Content Management System
 *
 * @author Tosyk, Photon
 * @package nomicms/NomiCMS
 * @link   http://nomicms.ru
 */

/**
 * Маршруты пакета apanel
 */
return [
    [
        'url' => '/panel',
        'package' => 'apanel',
        'src' => 'index'
    ],
    [
        'url' => '/panel/system',
        'package' => 'apanel',
        'src' => 'system'
    ],
    [
        'url' => '/panel/{str}',
        'package' => 'apanel',
        'src' => 'index',
        'params' => [
            'action'
        ]
    ],
];
