<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\Db;
class Index extends Controller {
    public function index() {

        $new_kown = [];
        $jd = Db::table('mk_herb_jianding')->where('jd_status',1)->order('jd_id desc')->limit(4)->select();
        foreach ($jd as $new) {
            $new['jd_name'] = $new['jd_name'] . '的鉴定方法';
            $new['id'] = $new['jd_id'];
            $new['name'] = $new['jd_name'];

            $new_kown[] = $new;
        }
        $meirong = Db::table('mk_herb_meirong')->where('mr_status',1)->order('mr_id desc')->limit(3)->select();
        foreach ($meirong as $mr) {
            $mr['mr_name'] = $mr['mr_name'] . '的美容方法及功效';
            $mr['id'] = $mr['mr_id'];
            $mr['name'] = $mr['mr_name'];

            $new_kown[] =$mr;
        }

        $this->assign('new',$new_kown);
        return $this->fetch('Index/index');
    }
}
