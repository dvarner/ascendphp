<?php namespace App\Controller;

use App\Controller\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        // By doing this; rest api is setup for this controller to defaults set by BaseController
        $this->setModel('user');
        $this->setPathSub('admin/');
    }
}