<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\Db;
class Medicine extends Controller {
    public static $COMMON_MAP = [
        1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,
        16,17,18,19,20,21,22,23,24,25,26,27,28
    ];
    public static  $YAOYONG_MAP = [
        29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46
    ];
    public function index() {
        $data = input();
        if (empty($data['id'])) {
            $this->error('ID不能为空','Index/index');
        }
        $type_data = Db::table('mk_medicine_type')->where('lm_id',$data['id'])->find();
        $where['zy_type'] = array('eq',$data['id']);
        $where['zy_status'] = array('eq',1);
        if (in_array($data['id'],self::$COMMON_MAP)) {
            $yaocai_list = Db::table('mk_medicine_common')->where($where)->order('zy_id desc')->paginate(12);
        } elseif (in_array($data['id'],self::$YAOYONG_MAP)) {
            $yaocai_list = Db::table('mk_medicine_yaoyong')->where($where)->order('zy_id desc')->paginate(12);
        }

        $this->assign('type',$type_data);
        $this->assign('list',$yaocai_list);
        return $this->fetch('Medicine/medicine');
    }

    public function index_more() {
        return $this->fetch('Medicine/medicine_more');
    }
}
