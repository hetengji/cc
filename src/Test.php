<?php

namespace HeTengJi\Test;

use Encore\Admin\Extension;

class Test extends Extension
{
    public $name = 'test';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Test',
        'path'  => 'test',
        'icon'  => 'fa-gears',
    ];
}