<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan pesan notifikasi dengan Toastr JS</title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<style type="text/css">
		body {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo site_url('toastr/post');?>" method="post">
					<div class="form-group">
						<label>Tuliskan nama anda</label>
						<input type="text" name="name" class="form-control" autocomplete="off" />
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
				</form>				
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<!-- Mengecek jika ada session flashdata yang berisi session yang berisi notifikasi dari server, maka toastr akan dipanggil/dijalankan -->
	<?php if($this->session->flashdata('success')):?>		
	<script type="text/javascript">
		
		toastr.success("<?php echo $this->session->flashdata('success');?>");

	</script>
	<?php endif;?>
</body>
</html>