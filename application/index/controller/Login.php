<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\Db;
class Login extends Controller {
    public function index() {
        return $this->fetch('Login/login');
    }

    public function account() {
        return $this->fetch('Login/account');
    }
}
