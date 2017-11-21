<?php $this->load->view('templates/header');?>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Form Beli Tas koper</h1>
		</div>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>ID Barang: </label>
				<input type="text" name="id_barang" class="form-control" placeholder="Masukkan ID Barang" 
				required value="<?php echo $id_barang; ?>">
			</div>
			<div class="form-group">
				<label>Pelanggan: </label>
				<input type="text" name="id_pelanggan" class="form-control" placeholder="Masukkan ID Pelanggan" 
				required value="<?php echo $id_pelanggan; ?>">
			</div>
			<div class="form-group">
				<label>Harga Beli: </label>
				<input type="text" name="harga_beli" class="form-control" placeholder="Masukkan Harga Beli" 
				required value="<?php echo $harga_beli; ?>">
			</div>
			<div class="form-group">
				<label>Tanggal Beli: </label>
				<input type="date" name="tanggal_beli" class="form-control" placeholder="Masukkan Tanggal Beli"
				value="<?php echo $tanggal_beli; ?>"><br/>
			</div>
			<input type="hidden" name="id_beli" value="<?php echo $id_beli; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('beli')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>


<?php $this->load->view('templates/footer'); ?>