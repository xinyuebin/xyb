<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
</head>
<body>
<h2>用户注册</h2>
	<form action="" method="POST">
		<table border="1">
			<tr>
				<td>用户名</td>
				<td><input type="text" name="user_name" placeholder="请输入用户名" required></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="user_pwd" placeholder="请您输入密码" required pattern="[A-Za-z0-9\w{6,20}"></td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td><input type="password" name="user_repwd" placeholder="请确认您的密码" required pattern="[A-Za-z0-9\w{6,20}"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" name="user_email" placeholder="请输入您的E-mail" required></td>
			</tr>
			<tr>
				<td>手机号</td>
				<td><input type="phone" name='user_phone'pattern="[0-9]*[1-9][0-9]*$" required placeholder="请输入您的手机号"></td>
			</tr>
			<tr>
				<td><input type="submit" value="注册"></td>
			</tr>
		</table>
	</form>
</body>
</html>