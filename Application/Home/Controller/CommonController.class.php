<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 通用控制器
 * 主要用于验证是否登陆 以及 用户权限
 */
class CommonController extends Controller {
    /* 定义用户id */
    public static $userid = '';
    /**
     * 自动执行
     */
    public function _initialize()
    {
		header("Content-type: text/html; charset=utf-8");
        // 判断用户是否登录
        if (session('userid')) {
            $this->userid = session('userid');
        } else {
            //$this->error('<h1 style="text-align:center; font-size: 50px; font-weight: normal;">-_-!</h1><br>', U('login/index'));
            redirect(U('login/index'), 3, '<h1 style="text-align:center; font-size: 50px; font-weight: normal; margin-top: 120px;">-_-。。。<br>对不起,您还没有登录,正跳转至登录面</h1>');
        }
    }
    
} 