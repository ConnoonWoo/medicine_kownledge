<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\Db;
class Medicine extends Controller {
    public function index() {
        return $this->fetch('Medicine/medicine');
    }

    public function index_more() {
        return $this->fetch('Medicine/medicine_more');
    }
}
