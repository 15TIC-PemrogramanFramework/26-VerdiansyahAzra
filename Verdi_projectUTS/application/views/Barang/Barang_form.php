<?php $this->load->view('templates/header');?>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Jual Tas Koper</h1>
		</div>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Barang: </label>
				<input type="text" name="nama_barang" class="form-control" placeholder="Inputkan Nama Barang" 
				required value="<?php echo $nama_barang; ?>">
			</div>
			<div class="form-group">
				<label>Jenis barang: </label>
				<input type="text" name="jenis_barang" class="form-control" placeholder="Inputkan Jenis Barang" 
				required value="<?php echo $jenis_barang; ?>">
			</div>
			<div class="form-group">
				<label>Ukuran barang: </label>
				<input type="text" name="ukuran_barang" class="form-control" placeholder="Inputkan Ukuran Barang" 
				required value="<?php echo $ukuran_barang; ?>">
			</div>
			<div class="form-group">
				<label>Gambar barang: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Barang"><br/>
			</div>
			<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('barang')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>




<?php $this->load->view('templates/footer'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>