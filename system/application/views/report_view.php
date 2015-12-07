<?php require('includes/head.php'); ?>
	<title>VIVACOM</title>
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url().'css/jquery.datetimepicker.css';?>">
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.datetimepicker.js" ></script>
	
</head>

<body>
	<div class="main bg3">
		<?php require('includes/header.php'); ?>
		<div class="wrapper gutter__right gutter__left dashborad__wrp">	
			<div class="msg__box">
				<?php echo $success; ?>
				<?php echo validation_errors(); ?>
			</div>
			<div class="admninn__pagecontent">
				<div class="report__links">
					<div class="rp__link p_destination">
						<i>
						</i>
						<a href="javascript:void(0);">Report Per Destination</a>
						<div class="clear"></div>
					</div>
					<div class="rp__link p_monthly">
						<i>
						</i>
						<a href="javascript:void(0);">Monthly Travel</a>
						<div class="clear"></div>
					</div>
					<div class="rp__link p_class">
						<i>
						</i>
						<a href="javascript:void(0);">Per Class</a>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>														
		</div>
		<div class="copyright">
			Powered By Vivacom , All Rights Reserved
		</div>		
	</div>	
	<?php require('includes/footer.php'); ?>
</body>
</html>