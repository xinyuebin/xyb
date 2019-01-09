<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if (IS_POST) {
        	$users = D('users');
        	if (!$data = $users->create()) {
        		exit($users->getError());
        	}
        	if ($id = $users->add($data)) {
        		$this->success('注测成功',U('login/login'));
        	} else {
        		$this->error('注册失败');
        	} 
        }else {
        		$this->display();
        	}
    }
}