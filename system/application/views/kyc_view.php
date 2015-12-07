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
				<div class="column__1">	
					<form action="" method="post">
						<div class="form">
							<div class="field" role="user-name">
								<label style="padding:0px;">
									First Name			
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__1" name="f_name" id="f_name" placeholder="First Name" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="">
									Middle Name		
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__2" name="m_name" id="m_name" placeholder="Middle Name" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="">
									Last Name		
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__1" name="l_name" id="l_name" placeholder="Last Name" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="">
									Mobile No	
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__2" name="mobile" id="mobile" placeholder="Mobile No" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="">
									Email	
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__1" name="email" id="email" placeholder="Email" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="">
									Place		
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__2" name="place" id="place" placeholder="Place" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="">
									City		
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__1" name="city" id="city" placeholder="City" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="">
									Destination		
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__2" name="destination" id="destination" placeholder="Destination" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="">
									Type of Ticket		
								</label>
								<div class="input__area">
									<input type="text" value="" class="input crv__1" name="ticket_type" id="ticket_type" placeholder="Type of Ticket" >
									<div id="" class="val__msgbx"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="field" role="user-name">
								<label style="padding:0;">
									&nbsp;				
								</label>					
								<input type="submit" name="create_kyc" id="create_kyc" class="submit__button crv__2" style="float:none;" value="Submit">
							</div>
						</div>
					</form>
				</div>
				<div class="column__2">
					<div class="kyc__list">
						<div class="kyc_qlist__heading col1__top">
							Recently Added
						</div>
						<div class="all__list">
							<?php
							if(sizeof($kyc_array)>0)
							{
								$i=1;
								foreach($kyc_array as $kyc)
								{								
							?>
									<div class="indiv__details">
										<?php
										if($i%2==1)
										{
										?>
											<div class="pro__thumb" style="margin-right: 20px;">
												<img src="<?php echo base_url().'images/propic.png'; ?>" class="sm__thumb">
											</div>
										<?php
										}
										?>
										<div class="details">
											<label>Name</label>
											<em>:</em>
											<div class="det__val"><?php echo $kyc['f_name'].' '.$kyc['l_name']; ?></div>
											<div class="clear"></div>
											
											<label>Mobile No</label>
											<em>:</em>
											<div class="det__val"><?php echo $kyc['mobile']; ?></div>
											<div class="clear"></div>
											
											<label>Email</label>
											<em>:</em>
											<div class="det__val"><?php echo $kyc['email']; ?></div>
											<div class="clear"></div>
											
											<label>Destination</label>
											<em>:</em>
											<div class="det__val"><?php echo $kyc['destination']; ?></div>
											<div class="clear"></div>
										</div>
										<?php
										if($i%2==0)
										{
										?>
											<div class="pro__thumb" style="margin-left: 20px;">
												<img src="<?php echo base_url().'images/propic.png'; ?>" class="sm__thumb">
											</div>
										<?php
										}
										?>
										<div class="clear"></div>
									</div>
							<?php
									$i++;
								}
							}
							?>
						</div>
						<a href="<?php echo base_url().'index.php/all_kyc' ?>" class="viewall__button">View All</a>
						<div class="clear"></div>
					</div>
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