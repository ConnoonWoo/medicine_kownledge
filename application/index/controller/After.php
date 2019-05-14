<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\User;
use think\Db;
use think\Session;

class After extends Controller {
    public function index(){
        return $this->fetch('After/message');
    }

    public function create_gps() {
        return $this->fetch('After/create_gps');
    }

    public function create_medicine() {
        $type = Db::table('mk_medicine_type')->where('lm_parent_name','neq','药用植物库')->select();
        $this->assign('type', $type);

        return $this->fetch('After/create_medicine');
    }

    public function create_medicine_yaoyong() {
        $type = Db::table('mk_medicine_type')->where('lm_parent_name','eq','药用植物库')->select();
        $this->assign('type', $type);

        return $this->fetch('After/create_plant');
    }

    public function create_suffer() {
        return $this->fetch('After/create_suffer');
    }

    public function add_medicine() {
        $data = input();
        if (!empty($data['name'])) {
            $yaocai = Db::table('mk_medicine_common')->where('zy_name', $data['name'])->find();
            if ($yaocai) {
                $this->error('该中药材已存在', 'After/create_medicine');
            }
        }
        //浏览器里的临时文件
        if ($_FILES['image']['tmp_name']) {
            //判断图片宽高，为了保证列表中图片展示一致
            list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
            if ($width != 800 && $height != 600) {
                $this->error('图片尺寸有误，请上传宽800px,高600px的图片。');
            }
            $data['image'] = $this->upload();
        }
        $params = [];
        $params['zy_name'] = $data['name'];
        $params['zy_content'] = $data['content'];
        $params['zy_new_name'] = $data['new_name'];
        $params['zy_kemu'] = $data['kemu'];
        $params['zy_study_name'] = $data['study_name'];
        $params['zy_gongneng_type'] = $data['gongneng_type'];
        $params['zy_fenbu'] = $data['fenbu'];
        $params['zy_laiyuan'] = $data['laiyuan'];
        $params['zy_ruyao'] = $data['ruyao'];
        $params['zy_jiagong'] = $data['jiagong'];
        $params['zy_xingzhuang'] = $data['xingzhuang'];
        $params['zy_xingwei'] = $data['xingwei'];
        $params['zy_gongxiao'] = $data['gongxiao'];
        $params['zy_zhuzhi'] = $data['zhuzhi'];
        $params['zy_yongfa'] = $data['yongfa'];
        $params['zy_baocun'] = $data['baocun'];
        $params['zy_jinji'] = $data['jinji'];
        $params['zy_daodixing'] = $data['daodixing'];
        $params['zy_type'] = $data['type'];
        $params['zy_image'] = $data['image'];
        $params['zy_author'] = Session::get('id');
        $params['zy_status'] = 0;
        $params['gmt_create'] = time();
        $params['gmt_modified'] = time();

        $insert_data = Db::table('mk_medicine_common')->insert($params);
        if (empty($insert_data)) {
            $this->error('创建失败，请重试', 'After/create_medicine');
        } else {
            $this->success('创建成功', 'Index/index');
        }
    }

    //上传图片函数
    public function upload(){
        // 获取表单上传的文件，例如上传了一张图片
        $file = request()->file('image');
        if($file){
            //将传入的图片移动到框架应用根目录/public/uploads/ 目录下，ROOT_PATH是根目录下，DS是代表斜杠 /
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS .'uploads');
            if($info){
                return $info->getSaveName();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();die;
            }
        }
    }

    public function add_plant() {
        $data = input();
        if (!empty($data['name'])) {
            $yaocai = Db::table('mk_medicine_yaoyong')->where('zy_name', $data['name'])->find();
            if ($yaocai) {
                $this->error('该药用植物已存在', 'After/create_plant');
            }
        }
        //浏览器里的临时文件
        if ($_FILES['image']['tmp_name']) {
            //判断图片宽高，为了保证列表中图片展示一致
            list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
            if ($width != 800 && $height != 600) {
                $this->error('图片尺寸有误，请上传宽800px,高600px的图片。');
            }
            $data['image'] = $this->upload();
        }
        $params = [];
        $params['zy_name'] = $data['name'];
        $params['zy_study_name'] = $data['study_name'];
        $params['zy_jie'] = $data['jie'];
        $params['zy_gang'] = $data['gang'];
        $params['zy_mu'] = $data['mu'];
        $params['zy_shu'] = $data['shu'];
        $params['zy_new_name'] = $data['new_name'];
        $params['zy_men'] = $data['men'];
        $params['zy_yagang'] = $data['yagang'];
        $params['zy_ke'] = $data['ke'];
        $params['zy_xingtai'] = $data['xingtai'];
        $params['zy_fenbu'] = $data['fenbu'];
        $params['zy_type'] = $data['type'];
        $params['zy_image'] = $data['image'];
        $params['zy_author'] = Session::get('id');
        $params['zy_status'] = 0;
        $params['gmt_create'] = time();
        $params['gmt_modified'] = time();

        $insert_data = Db::table('mk_medicine_yaoyong')->insert($params);
        if (empty($insert_data)) {
            $this->error('创建失败，请重试', 'After/create_plant');
        } else {
            $this->success('创建成功', 'Index/index');
        }
    }
}
