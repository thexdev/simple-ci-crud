<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/font-awesome.min.css'); ?>">
	<title>Add Member</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card bg-light shadow-sm">
					<form action="<?= base_url('/member/insert'); ?>" method="post">
						<div class="card-header bg-danger text-white">
							<h5><i class="fa fa-plus-circle mr-1"></i> Add Member</h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" placeholder="Username" class="form-control" required autocomplete="off">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" placeholder="Email" class="form-control" required autocomplete="off">
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea name="address" class="form-control" placeholder="Address"></textarea>
							</div>
							<div class="form-group">
								<div class="btn-group">
									<button type="submit" class="btn btn-dark">Add</button>
									<a href="<?= base_url(); ?>" class="btn btn-outline-dark">Cancel</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>