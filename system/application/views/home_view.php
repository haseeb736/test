<!DOCTYPE html>
<html>
	<?php require('includes/head.php'); ?>
	<title>VIVACOM</title>
</head>

<body>
	<div class="main bg1">
		<?php //require('includes/header.php'); ?>
		<div class="wrapper gutter__right gutter__left">			
			<div class="login__bx p-8">
				<div class="msg__box">
					<?php echo $error; ?>
				</div>
				<div class="hm__logo">
					<i></i>
				</div>
				<form action="" method="post">
					<div class="form">
						<div class="field" role="user-name">
							<label style="border-radius: 12px 0 0;border:1px solid #134F8D;">
								Username			
							</label>
							<div class="input__area login__fld">
								<input type="text" value="" class="input" style="border:1px solid #134F8D;border-radius: 0 0 12px;background-color: rgba(255, 0, 0, 0);color: #fff;" name="username" id="ls_username" placeholder="User Name" >
								<div id="" class="val__msgbx"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="field" role="user-name">
							<label style="border-radius: 0 0 0 12px;border:1px solid #134F8D;">
								Password		
							</label>
							<div class="input__area login__fld">
								<input type="password" value="" class="input" style="border:1px solid #134F8D;border-radius: 0 12px 0 0;background-color: rgba(255, 0, 0, 0);color: #fff;" name="password" id="ls_password" placeholder="Password" >
								<div id="" class="val__msgbx"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="field login__fld" role="hash-code">
							<input type="submit" name="adminlogin" id="adminlogin" class="submit__btn" value="Login">
							<div class="clear"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="clear">
		</div>
		<div class="copyright">
			Powered By Vivacom , All Rights Reserved
		</div>
	</div>
	<?php require('includes/footer.php'); ?>
</body>
</html>