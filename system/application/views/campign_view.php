<?php require('includes/head.php'); ?>
	<title>VIVACOM</title>
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url().'css/jquery.datetimepicker.css';?>">
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.datetimepicker.js" ></script>
	<script>
		$(document).ready(function(){			
			$('#rtable').dataTable();
			$('#rtable_length').html('Loading');
		});
	</script>
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
				<div class="column_center">	
					<form action="campign/send_notification" method="post">
						<div class="form">
							<div class="field" role="user-name">
								
								<div class="input__area">
                                                                    
                                                                    <select name="destination" class="input crv__1" >
                                                                          <option>--Select Destination--</option>
                                                                          
                                                                     <?php foreach($destinataions as $destination) {?> 
                                                                          
                                                                          <option value="<?php echo $destination['destination']?>"><?php echo $destination['destination']?></option>
                                                                          
                                                                     <?php } ?>
                                                                      
                                                                    </select>
									
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
                                                       
							
							<div class="field" role="user-name">
								
								<div class="input__area">
                                                                    <textarea name="msg" class="input crv__2" style="height:150px" placeholder="Enter the Message"></textarea>
									
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							
							<div class="field" role="user-name">
								<label style="padding:0;">
									&nbsp;				
								</label>					
								<input type="submit" name="send_notification" id="send_notification" class="submit__button crv__2" style="float:none;" value="Send">
							</div>
						</div>
					</form>
				</div>
				
				<div class="clear"></div>
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