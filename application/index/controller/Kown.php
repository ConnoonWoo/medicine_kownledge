<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use think\Db;
class Kown extends Controller {
    public function index() {
        $data = input();

        switch ($data['id']) {
            case 1:
                $type = Db::table('mk_jingyan_type')->where('jy_id', $data['id'])->find();
                $message = Db::table('mk_herb_chuanshuo')->where('cs_status', 1)->order('cs_id desc')->paginate(10);
                break;
            case 2:
                $type = Db::table('mk_jingyan_type')->where('jy_id', $data['id'])->find();
                $message = Db::table('mk_herb_jianding')->where('jd_status', 1)->order('jd_id desc')->paginate(10);
                break;
            case 3:
                $type = Db::table('mk_jingyan_type')->where('jy_id', $data['id'])->find();
                $message = Db::table('mk_herb_meirong')->where('mr_status', 1)->order('mr_id desc')->paginate(10);
                break;
            case 4:
                $type = Db::table('mk_jingyan_type')->where('jy_id', $data['id'])->find();
                $message = Db::table('mk_herb_paozhi')->where('pz_status', 1)->order('pz_id desc')->paginate(10);
                break;
            case 5:
                $type = Db::table('mk_jingyan_type')->where('jy_id', $data['id'])->find();
                $message = Db::table('mk_herb_yangsheng')->where('ys_status', 1)->order('ys_id desc')->paginate(10);
                break;
            case 6:
                $type = Db::table('mk_jingyan_type')->where('jy_id', $data['id'])->find();
                $message = Db::table('mk_herb_zhongzhi')->where('zz_status', 1)->order('zz_id desc')->paginate(10);
                break;
        }

        $this->assign('id',$data['id']);
        $this->assign('type', $type);
        $this->assign('lists',$message);
        return $this->fetch('Kown/kownledge');
    }

    public function index_more() {
        $data = input();

        switch ($data['type_id']) {
            case 1:
                $message = Db::table('mk_herb_chuanshuo')->where('cs_id', $data['id'])->find();
                break;
            case 2:
                $message = Db::table('mk_herb_jianding')->where('jd_id', $data['id'])->find();
                break;
            case 3:
                $message = Db::table('mk_herb_meirong')->where('mr_id', $data['id'])->find();
                break;
            case 4:
                $message = Db::table('mk_herb_paozhi')->where('pz_id', $data['id'])->find();
                break;
            case 5:
                $message = Db::table('mk_herb_yangsheng')->where('ys_id', $data['id'])->find();
                break;
            case 6:
                $message = Db::table('mk_herb_zhongzhi')->where('zz_id', $data['id'])->find();
                break;
        }
        $user = Db::table('mk_user')->where('user_id',$message['author'])->find();

        $message['author_name'] = $user['user_name'];
        $message['gmt_modified'] = date('Y-m-d H:i:s',$message['gmt_modified']);

        $this->assign('type_id',$data['type_id']);
        $this->assign('data',$message);

        return $this->fetch('Kown/kownledge_more');
    }
}
