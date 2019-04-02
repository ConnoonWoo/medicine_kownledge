/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : medicine_knowledge

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-04-02 23:04:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mk_admin
-- ----------------------------
DROP TABLE IF EXISTS `mk_admin`;
CREATE TABLE `mk_admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_new_name` varchar(255) DEFAULT NULL,
  `admin_sex` int(10) DEFAULT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_status` int(10) DEFAULT NULL,
  `gmt_create` int(11) DEFAULT NULL,
  `gmt_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_admin
-- ----------------------------

-- ----------------------------
-- Table structure for mk_herb_chuanshuo
-- ----------------------------
DROP TABLE IF EXISTS `mk_herb_chuanshuo`;
CREATE TABLE `mk_herb_chuanshuo` (
  `cs_id` int(10) NOT NULL AUTO_INCREMENT,
  `cs_name` varchar(255) DEFAULT NULL COMMENT '中药名称',
  `cs_shiju` varchar(255) DEFAULT NULL COMMENT '古诗词句',
  `cs_quwen` varchar(255) DEFAULT NULL COMMENT '形性趣闻',
  `cs_gushi` varchar(255) DEFAULT NULL COMMENT '传说故事',
  `cs_status` int(10) DEFAULT NULL,
  `cs_type` int(10) DEFAULT NULL,
  `cs_author` int(10) DEFAULT NULL,
  `gmt_create` int(11) DEFAULT NULL,
  `gmt_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`cs_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_herb_chuanshuo
-- ----------------------------

-- ----------------------------
-- Table structure for mk_herb_jianding
-- ----------------------------
DROP TABLE IF EXISTS `mk_herb_jianding`;
CREATE TABLE `mk_herb_jianding` (
  `jd_id` int(10) NOT NULL AUTO_INCREMENT,
  `jd_name` varchar(255) DEFAULT NULL COMMENT '药材名称',
  `jd_laiyuan` varchar(255) DEFAULT NULL COMMENT '药材来源鉴定',
  `jd_history` varchar(255) DEFAULT NULL COMMENT '药材历史考证',
  `jd_xingtai` varchar(255) DEFAULT NULL COMMENT '植物形态鉴定',
  `jd_xingzhuang` varchar(255) DEFAULT NULL COMMENT '药材性状鉴定',
  `jd_xianwei` varchar(255) DEFAULT NULL COMMENT '药材显微鉴定',
  `jd_lihua` varchar(255) DEFAULT NULL COMMENT '药材理化鉴定',
  `jd_guige` varchar(255) DEFAULT NULL COMMENT '商品规格',
  `jd_shengchang` varchar(255) DEFAULT NULL COMMENT '生境分布',
  `jd_caiji` varchar(255) DEFAULT NULL COMMENT '采集加工',
  `jd_paozhi` varchar(255) DEFAULT NULL COMMENT '饮片炮制',
  `jd_xingneng` varchar(255) DEFAULT NULL COMMENT '性能功用',
  `jd_fuzhu` varchar(255) DEFAULT NULL COMMENT '附注',
  `jd_status` int(10) DEFAULT NULL,
  `jd_type` int(10) NOT NULL,
  `jd_author` int(10) DEFAULT NULL,
  `gmt_create` int(11) DEFAULT NULL,
  `gmt_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`jd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_herb_jianding
-- ----------------------------

-- ----------------------------
-- Table structure for mk_herb_meirong
-- ----------------------------
DROP TABLE IF EXISTS `mk_herb_meirong`;
CREATE TABLE `mk_herb_meirong` (
  `mr_id` int(10) NOT NULL AUTO_INCREMENT,
  `mr_name` varchar(255) DEFAULT NULL COMMENT '药材名称',
  `mr_jianjie` varchar(255) DEFAULT NULL COMMENT '药材简介',
  `mr_gongxiao` varchar(255) DEFAULT NULL COMMENT '美容功效',
  `mr_fangfa` varchar(255) DEFAULT NULL COMMENT '美容方法',
  `mr_yongliang` varchar(255) DEFAULT NULL COMMENT '用法用量',
  `mr_zhuyi` varchar(255) DEFAULT NULL COMMENT '使用注意',
  `mr_anyu` varchar(255) DEFAULT NULL COMMENT '按语',
  `mr_peifang` varchar(255) DEFAULT NULL COMMENT '配方',
  `mr_wenxian` varchar(255) DEFAULT NULL COMMENT '本草文献',
  `mr_yanjiu` varchar(255) DEFAULT NULL COMMENT '现代研究',
  `mr_status` int(10) DEFAULT NULL,
  `mr_type` int(10) NOT NULL,
  `mr_author` int(10) DEFAULT NULL,
  `gmt_create` int(11) DEFAULT NULL,
  `gmt_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`mr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_herb_meirong
-- ----------------------------

-- ----------------------------
-- Table structure for mk_herb_paozhi
-- ----------------------------
DROP TABLE IF EXISTS `mk_herb_paozhi`;
CREATE TABLE `mk_herb_paozhi` (
  `pz_id` int(10) NOT NULL AUTO_INCREMENT,
  `pz_name` varchar(255) DEFAULT NULL COMMENT '药材名称',
  `pz_laiyuan` varchar(255) DEFAULT NULL COMMENT '药材来源',
  `pz_fangfa` varchar(255) DEFAULT NULL COMMENT '古代炮制方法',
  `pz_new_fangfa` varchar(255) DEFAULT NULL COMMENT '现代炮制方法',
  `pz_xingzhuang` varchar(255) DEFAULT NULL COMMENT '饮片性状',
  `pz_biaozhun` varchar(255) DEFAULT NULL COMMENT '质量标准',
  `pz_mudi` varchar(255) DEFAULT NULL COMMENT '炮制目的',
  `pz_choose` varchar(255) DEFAULT NULL COMMENT '应用选择',
  `pz_yanjiu` varchar(255) DEFAULT NULL COMMENT '现代研究',
  `pz_fu` varchar(255) DEFAULT NULL COMMENT '附',
  `pz_zongjie` varchar(255) DEFAULT NULL COMMENT '总结',
  `pz_status` int(10) DEFAULT NULL,
  `pz_type` int(10) DEFAULT NULL,
  `pz_author` int(10) DEFAULT NULL,
  `gmt_create` int(11) DEFAULT NULL,
  `gmt_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`pz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_herb_paozhi
-- ----------------------------

-- ----------------------------
-- Table structure for mk_herb_yangsheng
-- ----------------------------
DROP TABLE IF EXISTS `mk_herb_yangsheng`;
CREATE TABLE `mk_herb_yangsheng` (
  `ys_id` int(10) NOT NULL AUTO_INCREMENT,
  `ys_name` varchar(255) DEFAULT NULL COMMENT '中药名称',
  `ys_xingtai` varchar(255) DEFAULT NULL COMMENT '形态采制',
  `ys_baojian` varchar(255) DEFAULT NULL COMMENT '养生保健作用',
  `ys_peifang` varchar(255) DEFAULT NULL COMMENT '养生配方推荐',
  `ys_zhuyi` varchar(255) DEFAULT NULL COMMENT '保健注意',
  `ys_status` int(10) DEFAULT NULL,
  `ys_type` int(10) NOT NULL,
  `ys_author` int(10) DEFAULT NULL,
  `gmt_create` int(11) DEFAULT NULL,
  `gmt_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`ys_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_herb_yangsheng
-- ----------------------------

-- ----------------------------
-- Table structure for mk_herb_zhongzhi
-- ----------------------------
DROP TABLE IF EXISTS `mk_herb_zhongzhi`;
CREATE TABLE `mk_herb_zhongzhi` (
  `zz_id` int(10) NOT NULL AUTO_INCREMENT,
  `zz_name` varchar(255) DEFAULT NULL COMMENT '中药名称',
  `zz_gaishu` varchar(255) DEFAULT NULL COMMENT '概述',
  `zz_xingtai` varchar(255) DEFAULT NULL COMMENT '形态特征',
  `zz_huanjing` varchar(255) DEFAULT NULL COMMENT '生长环境',
  `zz_jishu` varchar(255) DEFAULT NULL COMMENT '种植技术',
  `zz_guanli` varchar(255) DEFAULT NULL COMMENT '栽培管理',
  `zz_caishou` varchar(255) DEFAULT NULL COMMENT '采收与加工',
  `zz_status` int(10) DEFAULT NULL,
  `zz_type` int(10) DEFAULT NULL,
  `zz_author` int(10) DEFAULT NULL,
  `gmt_create` int(11) DEFAULT NULL,
  `gmt_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`zz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_herb_zhongzhi
-- ----------------------------

-- ----------------------------
-- Table structure for mk_jidi
-- ----------------------------
DROP TABLE IF EXISTS `mk_jidi`;
CREATE TABLE `mk_jidi` (
  `jidi_id` int(10) NOT NULL AUTO_INCREMENT,
  `jidi_name` varchar(255) NOT NULL,
  `jidi_gps` varchar(255) DEFAULT NULL,
  `jidi_content` varchar(255) DEFAULT NULL,
  `jidi_main` varchar(255) DEFAULT NULL,
  `jidi_address` varchar(255) DEFAULT NULL,
  `jidi_status` int(10) DEFAULT NULL,
  `jidi_author` int(10) DEFAULT NULL,
  `gmt_create` int(11) DEFAULT NULL,
  `gmt_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`jidi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_jidi
-- ----------------------------

-- ----------------------------
-- Table structure for mk_jingyan_type
-- ----------------------------
DROP TABLE IF EXISTS `mk_jingyan_type`;
CREATE TABLE `mk_jingyan_type` (
  `jy_id` int(10) NOT NULL AUTO_INCREMENT,
  `jy_name` varchar(255) DEFAULT NULL,
  `jy_content` varchar(255) DEFAULT NULL,
  `gmt_create` int(11) NOT NULL,
  `gmt_modified` int(11) NOT NULL,
  PRIMARY KEY (`jy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_jingyan_type
-- ----------------------------

-- ----------------------------
-- Table structure for mk_medicine_common
-- ----------------------------
DROP TABLE IF EXISTS `mk_medicine_common`;
CREATE TABLE `mk_medicine_common` (
  `zy_id` int(10) NOT NULL AUTO_INCREMENT,
  `zy_name` varchar(255) DEFAULT NULL,
  `zy_content` varchar(255) DEFAULT NULL COMMENT '简介',
  `zy_new_name` varchar(255) DEFAULT NULL COMMENT '别名',
  `zy_kemu` varchar(255) DEFAULT NULL COMMENT '科',
  `zy_study_name` varchar(255) DEFAULT NULL COMMENT '中药学名',
  `zy_gongneng_type` varchar(255) DEFAULT NULL COMMENT '所属功效类',
  `zy_fenbu` varchar(255) DEFAULT NULL COMMENT '分布产地(区域)',
  `zy_laiyuan` varchar(255) DEFAULT NULL COMMENT '来源',
  `zy_ruyao` varchar(255) DEFAULT NULL COMMENT '入药部位',
  `zy_jiagong` varchar(255) DEFAULT NULL COMMENT '采收加工',
  `zy_xingzhuang` varchar(255) DEFAULT NULL COMMENT '药材性状',
  `zy_xingwei` varchar(255) DEFAULT NULL COMMENT '性味归经',
  `zy_gongxiao` varchar(255) DEFAULT NULL COMMENT '药材功效',
  `zy_zhuzhi` varchar(255) DEFAULT NULL COMMENT '药材主治',
  `zy_yongfa` varchar(255) DEFAULT NULL COMMENT '用法用量',
  `zy_jinji` varchar(255) DEFAULT NULL COMMENT '用药禁忌',
  `zy_baocun` varchar(255) DEFAULT NULL COMMENT '贮藏保存',
  `zy_peiwu` varchar(255) DEFAULT NULL COMMENT '中药配伍',
  `zy_paozhi` varchar(255) DEFAULT NULL COMMENT '中药炮制',
  `zy_duxing` varchar(255) DEFAULT NULL COMMENT '毒性',
  `zy_daodixing` varchar(255) DEFAULT NULL COMMENT '道地性',
  `zy_others` varchar(255) DEFAULT NULL COMMENT '相关论述',
  `zy_chuanshuo` varchar(255) DEFAULT NULL COMMENT '传说渊源',
  `zy_image` varchar(255) DEFAULT NULL COMMENT '图片',
  `zy_type` int(10) DEFAULT NULL COMMENT '中药类目（mk_medicine_type）',
  `zy_author` int(10) DEFAULT NULL COMMENT '发布作者',
  `zy_status` int(10) DEFAULT NULL,
  `gmt_create` int(11) NOT NULL,
  `gmt_modified` int(11) NOT NULL,
  PRIMARY KEY (`zy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_medicine_common
-- ----------------------------

-- ----------------------------
-- Table structure for mk_medicine_type
-- ----------------------------
DROP TABLE IF EXISTS `mk_medicine_type`;
CREATE TABLE `mk_medicine_type` (
  `lm_id` int(10) NOT NULL AUTO_INCREMENT,
  `lm_parent_name` varchar(255) DEFAULT NULL,
  `lm_name` varchar(255) NOT NULL,
  `lm_content` varchar(255) DEFAULT NULL,
  `gmt_create` int(11) NOT NULL,
  `gmt_modified` int(11) NOT NULL,
  PRIMARY KEY (`lm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_medicine_type
-- ----------------------------

-- ----------------------------
-- Table structure for mk_medicine_yaoyong
-- ----------------------------
DROP TABLE IF EXISTS `mk_medicine_yaoyong`;
CREATE TABLE `mk_medicine_yaoyong` (
  `zy_id` int(10) NOT NULL AUTO_INCREMENT,
  `zy_name` varchar(255) DEFAULT NULL,
  `zy_study_name` varchar(255) DEFAULT NULL COMMENT '学名',
  `zy_jie` varchar(255) DEFAULT NULL COMMENT '界',
  `zy_gang` varchar(255) DEFAULT NULL COMMENT '纲',
  `zy_mu` varchar(255) DEFAULT NULL COMMENT '目',
  `zy_shu` varchar(255) DEFAULT NULL COMMENT '属',
  `zy_new_name` varchar(255) DEFAULT NULL COMMENT '别名',
  `zy_men` varchar(255) DEFAULT NULL COMMENT '门',
  `zy_yagang` varchar(255) DEFAULT NULL COMMENT '亚纲',
  `zy_ke` varchar(255) DEFAULT NULL COMMENT '科',
  `zy_xingtai` varchar(255) DEFAULT NULL COMMENT '植物形态',
  `zy_fenbu` varchar(255) DEFAULT NULL COMMENT '生境分布',
  `zy_image` varchar(255) DEFAULT NULL COMMENT '图片',
  `zy_type` int(10) NOT NULL,
  `zy_author` int(10) DEFAULT NULL COMMENT '发布人',
  `zy_status` int(10) DEFAULT NULL,
  `gmt_create` int(11) NOT NULL,
  `gmt_modified` int(11) NOT NULL,
  PRIMARY KEY (`zy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_medicine_yaoyong
-- ----------------------------

-- ----------------------------
-- Table structure for mk_user
-- ----------------------------
DROP TABLE IF EXISTS `mk_user`;
CREATE TABLE `mk_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_new_name` varchar(255) DEFAULT NULL,
  `user_sex` int(2) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `gmt_create` int(11) NOT NULL,
  `gmt_modified` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mk_user
-- ----------------------------
