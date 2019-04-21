<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Db;
// 应用公共文件
function getTypeName($id) {
    $data = Db::table('mk_medicine_type')->where('lm_id', $id)->find();

    return $data['lm_name'];
}

function getNewData($data) {
    if (strlen($data) > 30) {
        $substr = substr($data, 0, 81);

        return $substr . '...';
    } else {
        return $data;
    }
}
