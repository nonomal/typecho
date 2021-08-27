<?php

namespace Widget;

/**
 * 可以被Widget_Do调用的接口
 */
interface DoInterface
{
    /**
     * 接口需要实现的入口函数
     */
    public function action();
}