<?php

namespace IEcho\Controller;

use IEcho\Common;
use IEcho\Japanese;

class Index extends BaseController
{
    public function index()
    {
        Common::showView('index');
    }

    public function make()
    {
        $japanese = new Japanese();
        // 根据提交的索引，生成假名数组
        $l = $japanese->makeArray($_GET['index']);
        $japanese->makeByGroup(2, 5)
            ->makeByGroup(3, 5)
            ->makeByGroup(4, 3)
            ->makeByGroup(5, 3)
            ->makeByGroup(6, 2);
        $words = $japanese->get();

        Common::showView('make', ['words' => $words]);
    }
}