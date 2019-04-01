<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\Db;
class Kown extends Controller {
    public function index() {
        return $this->fetch('Kown/kownledge');
    }

    public function index_more() {
        return $this->fetch('Kown/kownledge_more');
    }
}
