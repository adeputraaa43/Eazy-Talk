<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.39.1/dist/full.css" rel="stylesheet" type="text/css" />
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Home Page</title>
</head>

<body>
	<!-- About Eazy Talk -->
	<!-- <section class="eazy-talk">
                <div>
                    <h1 class="text-5xl font-bold">Eazy Talk</h1>
                    <p class="py-6 px-6 mx-3 font-bold">merupakan sebuah program yang dimana program ini berfokus dalam
                        bidang diskusi dan dapat diakses oleh siapapun dimana para penggunanya dapat bertukar pendapat
                        dan informasi</p>
                </div>
            </div>
        </div>
    </section> -->
	<div class="hero min-h-screen" style="background-image: url(assets/img/menu/Bgeazytalk.png);">
		<div class="hero-overlay bg-opacity-60"></div>
		<div class="hero-content text-center text-neutral-content">
			<div class="max-w-md">
				<h1 class="mb-5 text-5xl font-bold">Eazy Talk</h1>
				<p class="mb-5">merupakan sebuah program yang dimana program ini berfokus dalam
					bidang diskusi dan dapat diakses oleh siapapun dimana para penggunanya dapat bertukar pendapat
					dan informasi</p>
			</div>
		</div>
	</div>

	<!-- Menu -->
	<section>
		<center>
			<section class="Menu" id="Menu">
				<div class="min-h-screen bg-base-200">
					<div class="item">
						<h1 class="font-extrabold text-3xl pt-16">MENU</h1>
						<div class="line"></div>
					</div>
					<div class="container-fluid">
						<!-- row ux -->
						<div class="row justify-content-center align-items-center">
						<div class="justify-content-center align-items-center">
							<div class="card border-left-neutral shadow h-100 py-3 bg-primary">
								<div class="card-body">
									<div class="align-items-center">
										<div class="col mr-2">
											<div class="text-md font-weight-bold text-white text-uppercase mb-1">
												Video Call Group</div>
										</div>
										<div class="col-auto">
											<a href="https://meet.google.com/"><i
												class="fas fa-users fa-3x text-purple-50 hover:text-indigo-500"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

				
						<div class="col-xl-3 col-md-6 mb-1 ">
							<div class="card border-left-neutral shadow h-100 py-3 bg-primary">
								<div class="card-body">
									<div class="align-items-center">
										<div class="col mr-2">
											<div class="text-md font-weight-bold text-white text-uppercase mb-1">
												Project
											</div>
										</div>
										<div class="col-auto">
											<a href="<?= base_url('buku'); ?>"><i
													class="bx bxs-spreadsheet fa-3x text-purple-50 hover:text-blue-700"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
				

						<div class="col-xl-3 col-md-6 mb-1">
							<div class="card border-left-neutral shadow h-100 py-3 bg-primary">
								<div class="card-body">
									<div class="align-items-center">
										<div class="col mr-2">
											<div class="text-md font-weight-bold text-white text-uppercase mb-1">
												Messages
											</div>
										</div>
										<div class="col-auto">
											<a href="<?= base_url('buku'); ?>"><i
													class=" bx bx-chat fa-3x text-purple-50 hover:text-blue-700"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
		</center>
	</section>

	<!--About Meeting,Project & Messages-->
	<section>
		<div class="hero min-h-screen bg-base-150">
			<div class="hero-content flex-col lg:flex-row">
				<img src="assets/img/menu/about1.png" class="max-w-sm rounded-lg shadow-2xl" />
				<div>
					<h1 class="text-5xl font-bold">Meeting</h1>
					<p class="py-6 px-6 mx-3 font-bold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
						Eligendi numquam,
						modi doloribus autem beatae voluptatum similique dolor, architecto magnam voluptas
						,nesciunt eum ratione adipisci consequatur velit facilis officiis amet quaerat?</p>
				</div>
			</div>
		</div>
	</section>

	<div class="hero min-h-screen bg-base-200">
		<div class="hero-content flex-col lg:flex-row-reverse">
			<img src="assets/img/menu/about2.png" class="max-w-sm rounded-lg shadow-2xl" />
			<div>
				<h1 class="text-5xl font-bold">Project</h1>
				<p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
					exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
			</div>
		</div>
	</div>

	<section>
		<div class="hero min-h-screen bg-base-150">
			<div class="hero-content flex-col lg:flex-row">
				<img src="assets/img/menu/about3.png" class="max-w-sm rounded-lg shadow-2xl" />
				<div>
					<h1 class="text-5xl font-bold">Messages</h1>
					<p class="py-6 px-6 mx-3 font-bold">merupakan sebuah program yang dimana program ini berfokus
						dalam
						bidang diskusi dan dapat diakses oleh siapapun dimana para penggunanya dapat bertukar
						pendapat
						dan informasi</p>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer footer-center p-4 bg-base-300 text-base-content">
		<div>
			<p>Copyright © 2022 - All right reserved by ACME Industries Ltd</p>
		</div>
	</footer>




	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- row ux -->
		<div class="row">
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-danger shadow h-100 py-2 bg-primary">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Anggota
								</div>
								<div class="h1 mb-0 font-weight-bold text-white">
									<?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
							</div>
							<div class="col-auto">
								<a href="<?= base_url('user/anggota'); ?>"><i
										class="fas fa-users fa-3x text-warning"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2 bg-warning">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-md font-weight-bold text-white text-uppercase mb-1">Stok Buku
									Terdaftar</div>
								<div class="h1 mb-0 font-weight-bold text-white">
									<?php
                                $where = ['stok != 0'];
                                $totalstok = $this->ModelBuku->total('stok', $where);
                                echo $totalstok;        
                                ?>
								</div>
							</div>
							<div class="col-auto">
								<a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x text-primary"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2 bg-danger">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang
									dipinjam</div>
								<div class="h1 mb-0 font-weight-bold text-white">
									<?php
                                $where = ['pinjam != 0'];
                                $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
                                echo $totaldipinjam;
                                ?>
								</div>
							</div>
							<div class="col-auto">
								<a href="<?= base_url('user'); ?>"><i
										class="fas fa-user-tag fa-3x text-success"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2 bg-danger">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang
									dipinjam</div>
								<div class="h1 mb-0 font-weight-bold text-white">
									<?php
                                $where = ['dipinjam != 0'];
                                $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
                                echo $totaldipinjam;
                                ?>
								</div>
							</div>
							<div class="col-auto">
								<a href="<?= base_url('user'); ?>"><i
										class="fas fa-user-tag fa-3x text-success"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-warning shadow h-100 py-2 bg-success">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang
									dibooking</div>
								<div class="h1 mb-0 font-weight-bold text-white">
									<?php
                                $where = ['dibooking != 0'];
                                $totaldibooking = $this->ModelBuku->total('dibooking', $where);
                                echo $totaldibooking;
                                ?>
								</div>
							</div>
							<div class="col-auto">
								<a href="<?= base_url('user'); ?>"><i
										class="fas fa-shopping-cart fa-3x text-success"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end row ux -->

		<!-- divider -->
		<hr class="sidebar-divider">

		<!-- row table -->
		<div class="row">
			<div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
				<div class="page-header">
					<span class="fas fa-users text-primary mt-2">Data User</span>
					<a class="text-danger" href="<?= base_url('user/data_user'); ?>"><i
							class="fas fa-search mt-2 float-right">Tampilkan</i></a>
				</div>
				<table class="table mt-3">
					<thead class="table mt-3">
						<tr>
							<th>#</th>
							<th>Nama Anggota</th>
							<th>Email</th>
							<th>Role ID</th>
							<th>Aktif</th>
							<th>Member Sejak</th>
						</tr>
					</thead>
					<tbody>
						<?php
                    $i = 1;
                    foreach ($anggota as $a) :
                    ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $a['nama']; ?></td>
							<td><?= $a['email']; ?></td>
							<td><?= $a['role_id']; ?></td>
							<td><?= $a['is_active']; ?></td>
							<td><?= $a['tanggal_input']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

			<div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
				<div class="page-header">
					<span class="fas fa-book text-warning mt-2">Data Buku</span>
					<a href="<?= base_url('user/data_user'); ?>"><i
							class="fas fa-search text-primary mt-2 float-right">Tampilkan</i></a>
				</div>
				<div class="table-responsive">
					<table class="table mt-3" id="table-datatable">
						<thead>
							<tr>
								<th>#</th>
								<th>Judul Buku</th>
								<th>Pengarang</th>
								<th>Penerbit</th>
								<th>Tahun Terbit</th>
								<th>ISBN</th>
								<th>Stok</th>
							</tr>
						</thead>
						<tbody>
							<?php
                        $i = 1;
                        foreach ($buku as $b) :
                        ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $b['judul_buku']; ?></td>
								<td><?= $b['pengarang']; ?></td>
								<td><?= $b['penerbit']; ?></td>
								<td><?= $b['tahun_terbit']; ?></td>
								<td><?= $b['isbn']; ?></td>
								<td><?= $b['stok']; ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
		<!-- end of row table -->

	</div>
	<!-- /.container-fluid -->

	</div>
	<!-- end of main content -->
