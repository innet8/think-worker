<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace think\worker;

use think\facade\Console;

class Service
{
    public function register()
    {
        Console::addCommands([
            'worker'         => '\\think\\worker\\command\\Worker',
            'worker:server'  => '\\think\\worker\\command\\Server',
            'worker:gateway' => '\\think\\worker\\command\\GatewayWorker',
        ]);

    }
}
