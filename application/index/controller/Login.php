<?php
namespace app\index\controller;

use think\Controller;
//use app\index\model\User;
use think\Db;
use think\Session;
class Login extends Controller {
    public static $SEX_MAP = [
        '1' => '男',
        '2' => '女'
    ];

    public function index() {
        return $this->fetch('Login/login');
    }

    public function account() {
        return $this->fetch('Login/account');
    }

    public function add_account() {
        $data = input();

        if (empty($data['user_new_name']) || empty($data['user_name']) || empty($data['password'])) {
            return $this->error("account's data must write", 'Login/account');
        }
        $user = Db::table('mk_user')->where('user_name', $data['user_name'])->select();
        if ($user) {
            return $this->error('this accoutn is exist', 'Login/account');
        }

        $new_data = [
            'user_new_name' => $data['user_new_name'],
            'user_sex'      => intval($data['sex']),
            'user_name'     => $data['user_name'],
            'user_password' => md5($data['password']),
            'gmt_create'    => time(),
            'gmt_modified'  => time()
        ];
        $insert_data = Db::table('mk_user')->insert($new_data);

        if ($insert_data) {
            return $this->success('add account is success', 'Login/index');
        } else {
            return $this->error('add account is error', 'Login/account');
        }
    }

    public function login_in() {
        $data = input();
        if (empty($data['user_name']) || empty($data['password'])) {
            return $this->error("account's data must write", 'Login/index');
        }
        $where['user_name'] = array('eq',$data['user_name']);
        $where['user_password'] = array('eq',md5($data['password']));
        $select_data = Db::table('mk_user')->where($where)->select();
        if ($select_data) {
            Session::set('name',$data['user_name']);
            return $this->success('login success','Index/index');
        } else {
            return $this->error('login faild','Login/index');
        }

    }

    public function login_out() {
        Session::delete('name');
        $name = Session::get('name');
        if (empty($name)) {
            return $this->success('login out success');
        }
    }
}
