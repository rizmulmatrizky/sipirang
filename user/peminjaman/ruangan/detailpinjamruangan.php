<?php
$query = mysqli_query($conn,"SELECT pemakaian.id_pemakaian, pemakaian.ruangan_id, pemakaian.user_id, pemakaian.tanggal_mulai, pemakaian.tanggal_selesai, pemakaian.status, ruangan.nama_ruangan, ruangan.deskripsi, user.username from pemakaian inner join ruangan on ruangan.id_ruangan=pemakaian.ruangan_id inner join user on user.id_user=pemakaian.user_id and pemakaian.id_pemakaian='$_GET[id_pemakaian]'");
$d = mysqli_fetch_array($query);
?>

<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Pinjam</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Ruangan</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Detail Pinjam Barang</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">											
											<tr>
												<td>Nama Peminjam</td>
												<td>:</td>
												<td><?php echo $d['username'] ?></td>
											</tr>
											<tr>
												<td>Nama Ruangan</td>
												<td>:</td>
												<td><?php echo $d['nama_ruangan'] ?></td>
											</tr>
											<tr>
												<td>Tgl Mulai</td>
												<td>:</td>
												<td><?php echo $d['tanggal_mulai'] ?></td>
											</tr>
											<tr>
												<td>Tgl Selesai</td>
												<td>:</td>
												<td><?php echo $d['tanggal_selesai'] ?></td>
											</tr>
											<tr>
												<td>Status</td>
												<td>:</td>
												<td><?php echo $d['status'] ?></td>
											</tr>

											<tr>
												<td>Deskripsi</td>
												<td>:</td>
												<td><?php echo $d['deskripsi'] ?></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>