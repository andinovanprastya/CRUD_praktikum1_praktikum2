 <!DOCTYPE html>
 <html lang="">
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Edit Data</title>
 
 		<!-- Bootstrap CSS -->
 		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
 
 		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
 			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 		<![endif]-->
 	</head>
 	<body>
 		
 		<div class="alert alert-success">
 			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 			<strong>Update Data Berhasil!</strong> <?php echo anchor('pegawai/update/'.$this->uri->segment(3), 'Update Data Lagi'); ?>
 			<br>
 		</div>

 
 		<!-- jQuery -->
 		<script src="//code.jquery.com/jquery.js"></script>
 		<!-- Bootstrap JavaScript -->
 		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
 		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  		<script src="Hello World"></script>
 	</body>
 </html>