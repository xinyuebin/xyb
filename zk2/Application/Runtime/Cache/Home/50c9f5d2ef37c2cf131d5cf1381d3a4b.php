<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="user_name" placeholder="请输入登录用户名" required></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="user_pwd" placeholder="请输入登录密码" required></td>
			</tr>
			<tr>
				<td><input type="submit" value="登录"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>