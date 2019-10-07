<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/11/2019
 * Time: 9:32 AM
 */

class UrlUtil
{
    public static function getBaseUrl()
    {
        if (isset($_SERVER['HTTPS'])) {
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        } else {
            $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'];// .':'. $_SERVER['SERVER_PORT'];
    }
}