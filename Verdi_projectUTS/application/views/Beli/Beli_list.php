<?php $this->load->view('templates/header');?>

<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Beli Tas Koper</h1>
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('beli/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-square-o"></i> Insert</a>
		</div>
	</div>
<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th>Beli</th>
					<th>Barang</th>
					<th>Pelanggan</th>
					<th>Tanggal</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($beli as $key => $value) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value->id_beli; ?></td>
					<td><?php echo $value->id_barang; ?></td>
					<td><?php echo $value->id_pelanggan; ?></td>
					<td><?php echo $value->tanggal_beli; ?></td>
					<td><?php echo $value->harga_beli; ?></td>
					<td>
						<a href="<?php echo site_url('beli/delete/'.$value->id_beli); ?>"
							class="btn btn-danger">
							<i class="fa fa-times"></i>
						</a>
						<a href="<?php echo site_url('beli/update/'.$value->id_beli); ?>"
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