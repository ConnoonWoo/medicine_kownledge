<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\Db;
class Map extends Controller {
    public function index() {
        return $this->fetch('Map/map');
    }
}
