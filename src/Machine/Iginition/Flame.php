<?php

namespace Machine\Iginition;

class Flame
{

    /**
     * @param $args
     * @return void
     */
    public static function make($args)
    {
        $tmpt = new Template();
        $tmpt->set($args);
        $tmpt->render();
    }

    /**
     * @param $args
     * @return void
     */
    public static function debug($args)
    {
        $tmpt = new Template();
        $tmpt->set($args);
        $tmpt->renderHtml();
    }

    /**
     * @param $args
     * @return void
     */
    public static function errorPage($code)
    {
        $tmpt = new Template();
        $tmpt->renderErrorPage($code);
    }

}