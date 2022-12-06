<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Nama</th>
									<th scope="col">Email</th>
									<th scope="col" nowrap>Member Sejak</th>
									<th scope="col">Image</th>
								</tr>
							</thead>
							<tbody>
								<?php
                                $i = 1;
                                foreach ($anggota as $a) { ?>
								<tr>
									<th scope="row"><?= $i++; ?></th>
									<td scope="row"><?= $a['nama']; ?></td>
									<td scope="row"><?= $a['email']; ?></td>
									<td scope="row"><?= date('d F Y', $a['tanggal_input']); ?></td>
									<td scope="row">
										<picture>
											<source srcset="" type="image/svg+xml">
											<img src="<?= base_url('assets/img/profile/') . $a['image']; ?>"
												class="img-fluid img-thumbnail" alt="..."
												style="width:60px;height:80px;">
										</picture>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End of Main Content -->
<!-- notifikasi -->
<div class="overflow-x-auto w-full">
	<table class="table w-full">
		<!-- head -->
		<thead>
			<tr>
				<th>Name</th>
				<th>Informasi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- row 1 -->
			<tr>
				<td>
					<div class="flex items-center space-x-3">
						<div class="avatar">
							<div class="mask mask-squircle w-12 h-12">
								<img src="/tailwind-css-component-profile-2@56w.png"
									alt="Avatar Tailwind CSS Component" />
							</div>
						</div>
						<div>
							<div class="font-bold">Hart Hagerty</div>
							<div class="text-sm opacity-50">United States</div>
						</div>
					</div>
				</td>
				<td>
					Zemlak, Daniel and Leannon
					<br />
					<span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
				</td>
				<th>
					<button class="btn btn-primary btn-xs">details</button>
                    <button class="btn btn-primary btn-xs">delete</button>
				</th>
			</tr>
			<!-- row 2 -->
			<tr>
				<td>
					<div class="flex items-center space-x-3">
						<div class="avatar">
							<div class="mask mask-squircle w-12 h-12">
								<img src="/tailwind-css-component-profile-3@56w.png"
									alt="Avatar Tailwind CSS Component" />
							</div>
						</div>
						<div>
							<div class="font-bold">Brice Swyre</div>
							<div class="text-sm opacity-50">China</div>
						</div>
					</div>
				</td>
				<td>
					Carroll Group
					<br />
					<span class="badge badge-ghost badge-sm">Tax Accountant</span>
				</td>
				<th>
					<button class="btn btn-primary btn-xs">details</button>
                    <button class="btn btn-primary btn-xs">delete</button>
				</th>
                
			</tr>
			<!-- row 3 -->
			<tr>
				<td>
					<div class="flex items-center space-x-3">
						<div class="avatar">
							<div class="mask mask-squircle w-12 h-12">
								<img src="/tailwind-css-component-profile-4@56w.png"
									alt="Avatar Tailwind CSS Component" />
							</div>
						</div>
						<div>
							<div class="font-bold">Marjy Ferencz</div>
							<div class="text-sm opacity-50">Russia</div>
						</div>
					</div>
				</td>
				<td>
					Rowe-Schoen
					<br />
					<span class="badge badge-ghost badge-sm">Office Assistant I</span>
				</td>
				<th>
					<button class="btn btn-primary btn-xs">details</button>
                    <button class="btn btn-primary btn-xs">delete</button>
				</th>
			</tr>
			<!-- row 4 -->
			<tr>
				<td>
					<div class="flex items-center space-x-3">
						<div class="avatar">
							<div class="mask mask-squircle w-12 h-12">
								<img src="/tailwind-css-component-profile-5@56w.png"
									alt="Avatar Tailwind CSS Component" />
							</div>
						</div>
						<div>
							<div class="font-bold">Yancy Tear</div>
							<div class="text-sm opacity-50">Brazil</div>
						</div>
					</div>
				</td>
				<td>
					Wyman-Ledner
					<br />
					<span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
				</td>
				<th>
					<button class="btn btn-primary btn-xs">details</button>
                    <button class="btn btn-primary btn-xs">delete</button>
				</th>
			</tr>
		</tbody>
		<!-- foot -->

	</table>
</div>
