<?php

namespace App\Containers\User\Controllers;

use App\Port\Controller\Abstracts\KernelWebController;

/**
 * Class WebController
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class WebController extends KernelWebController
{

    /**
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sayWelcome()
    {
        return view('user-welcome');
    }
}