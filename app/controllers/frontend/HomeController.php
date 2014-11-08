<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 11/8/14
 * Time: 11:09 AM
 */

namespace Frontend;

use BaseController,
    View,
    Input,
    Config;

class HomeController extends BaseController
{
    public function getIndex()
    {
        $data = array();
        return View::make('shareiz/frontend/home/index', compact('data'));
    }
} 