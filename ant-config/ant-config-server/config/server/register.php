<?php
/**
 * Created by PhpStorm.
 * User: shenzhe
 * Date: 2016/11/29
 * Time: 11:21
 */
return array(
    'soa' => array(
        'register_callback' => 'socket\Handler\Soa::register',
        'drop_callback' => 'socket\Handler\Soa::drop',
        'ip' => '10.94.107.22',
        'port' => 9949,
        'timeOut' => 5000,
        'serverType' => 2,
    ),
);