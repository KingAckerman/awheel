<?php

namespace App\Controller;

use App\Model\User;
use light\Routing\Controller;

/**
 * Home Controller
 *
 * @package App\Controller
 */
class IndexController extends Controller
{
    public function home()
    {
        return 'Light';
    }

}
