<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/datatables.min.css'); ?>">
	<title>List Member</title>
</head>
<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-3">
				<div class="card bg-light border-0 shadow-sm">
					<div class="card-header bg-dark">
						<span class="text-white"><i class="fa fa-navicon mr-2"></i>Member</span>
					</div>
					<div class="card-body">
						<ul class="list-group list-group-flush">
							<li class="list-group-item bg-light"><a href="<?= base_url('/member/add'); ?>" class="text-dark"><i class="fa fa-plus-circle mr-1"></i>Add new</a></li>
						</ul>
					</div>
				</div>
				<div class="card bg-light shadow-sm border-0 mt-4">
					<div class="card-header bg-dark">
						<span class="text-white"><i class="fa fa-info-circle mr-1"></i>App Specification</span>
					</div>
					<div class="card-body">
						<ul>
							<li>CodeIgniter 3.1.10</li>
							<li>Bootstrap 4</li>
							<li>Font Awesome 4.0.7</li>
							<li>Datatables 1.10.18</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-9">
				<div class="table-responsive">
					<table id="list-member" class="table shadow-sm table-striped table-hover border-0">
						<thead class="bg-danger text-light">
							<tr>
								<th>
									<span class="badge badge-pill badge-light"><i class="fa fa-hashtag mr-1"></i>ID</span>
								</th>
								<th>
									<span class="badge badge-pill badge-light"><i class="fa fa-user-circle-o mr-1"></i>Usename</span>
								</th>
								<th>
									<span class="badge badge-pill badge-light"><i class="fa fa-location-arrow mr-1"></i>Address</span>
								</th>
								<th>
									<span class="badge badge-pill badge-light"><i class="fa fa-envelope mr-1"></i>Email</span>
								</th>
								<th>
									<span class="badge badge-pill badge-light">Action</span>
								</th>
							</tr>
						</thead>
						<tbody>
						<? foreach ($list_member as $member) : ?>
							<tr>
								<td><strong><?= $member['ID']; ?></strong></td>
								<td><?= $member['username']; ?></td>
								<td><?= $member['email']; ?></td>
								<td><?= $member['address']; ?></td>
								<td>
									<div class="btn-group">
										<a href="<?= base_url('/member/edit/' . $member['ID']); ?>" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i></a>
										<a href="<?= base_url('/member/delete/' . $member['ID']); ?>" class="btn btn-dark btn-sm"><i class="fa fa-trash"></i></a>
									</div>
								</td>
							</tr>
						<? endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-12 mt-5">
				<p class="text-center">
					<span class="d-block">&copy;<?= date('Y'); ?> - thexdev</span>
					<a href=""><i class="fa fa-facebook-official fa-2x mx-2 mt-3 text-muted"></i></a>
					<a href=""><i class="fa fa-instagram fa-2x mx-2 mt-3 text-muted"></i></a>
					<a href=""><i class="fa fa-github fa-2x mx-2 mt-3 text-muted"></i></a>
					<a href=""><i class="fa fa-twitter fa-2x mx-2 mt-3 text-muted"></i></a>
				</p>
			</div>
		</div>
	</div>

	<script src="<?= base_url('/assets/js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('/assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('/assets/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?= base_url('/assets/js/datatables.min.js'); ?>"></script>
	<script>
		$(function () {
		    $('#list-member').DataTable(/*{
		      	'paging'      : true,
		      	'lengthChange': false,
		      	'searching'   : false,
		      	'ordering'    : true,
		      	'info'        : true,
		      	'autoWidth'   : false
		    }*/)
		})
	</script>
</body>
</html>