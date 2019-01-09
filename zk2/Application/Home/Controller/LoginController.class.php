<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function login(){
		session('uname',nul);
		if (IS_POST) {
			$users = D('users');
			if (!$data = $users->create()) {
				exit($user->getError());
			}
			$where = array();
			$where['user_name'] = $data['user_name'];
			$where['user_pwd'] = $data['user_pwd'];
			$result = $users->where($where)->select();
			if ($result) {
				session (uname,$result[0]['user_name']);
				$this->success('登陆成功',U('xq/xq'));
			}else{
				$this->error('登录失败，用户名或密码不正确');
			}
		}else{
			$this->display();
		}
	}
}