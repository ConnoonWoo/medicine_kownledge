<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\Db;
class After extends Controller {
    public function index(){
        return $this->fetch('After/message');
    }
}
