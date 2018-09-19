<?php

namespace HeTengJi\Cc;

use Encore\Admin\Extension;

class Cc extends Extension
{
    public $name = 'cc';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Cc',
        'path'  => 'cc',
        'icon'  => 'fa-gears',
    ];
}