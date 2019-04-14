<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 14.04.2019
 * Time: 18:38
 */

namespace controllers;


class SiteController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/layout/layout.php');
    }
}