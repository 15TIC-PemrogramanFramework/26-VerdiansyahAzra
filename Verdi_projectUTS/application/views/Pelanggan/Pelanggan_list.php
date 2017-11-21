<?php $this->load->view('templates/header');?>

<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Pelanggan Tas Koper</h1>
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('pelanggan/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-square-o"></i> Insert</a>
		</div>
	</div>
<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th>Pelanggan</th>
					<th>Nama</th>
					<th>JK</th>
					<th>Asal Daerah</th>
					<th>Umur</th>
					<th>E-Mail</th>
					<th>No.Hp</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pelanggan as $key => $value) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value->id_pelanggan; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->jk; ?></td>
					<td><?php echo $value->asal_daerah; ?></td>
					<td><?php echo $value->umur; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->noHP; ?></td>
					<td>
						<a href="<?php echo site_url('pelanggan/delete/'.$value->id_pelanggan); ?>"
							class="btn btn-danger">
							<i class="fa fa-times"></i>
						</a>
						<a href="<?php echo site_url('pelanggan/update/'.$value->id_pelanggan); ?>"
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
