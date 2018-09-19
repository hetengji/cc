<?php

namespace HeTengJi\Test\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Title')
            ->description('Description')
            ->body(view('test::index'));
    }
}