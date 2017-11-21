<?php $this->load->view('templates/header');?>

<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Isi Komentar Kamu...</h1>
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('komentar/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-square-o"></i> Insert</a>
		</div>
	</div>
<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th>Komentar</th>
					<th>Barang</th>
					<th>Pelanggan</th>
					<th>Isi Komentar</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($komentar as $key => $value) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value->id_komentar; ?></td>
					<td><?php echo $value->id_barang; ?></td>
					<td><?php echo $value->id_pelanggan; ?></td>
					<td><?php echo $value->isi_komentar; ?></td>
					<td>
						<a href="<?php echo site_url('komentar/delete/'.$value->id_komentar); ?>"
							class="btn btn-danger">
							<i class="fa fa-times"></i>
						</a>
						<a href="<?php echo site_url('komentar/update/'.$value->id_komentar); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php $this->load->view('templates/footer'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>
