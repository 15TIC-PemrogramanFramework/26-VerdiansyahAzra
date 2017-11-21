<?php $this->load->view('templates/header');?>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Form Komentar Beli Tas Koper</h1>
		</div>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>ID Komentar: </label>
				<input type="text" name="id_komentar" class="form-control" placeholder="Masukkan ID Komentar" 
				required value="<?php echo $id_komentar; ?>">
			</div>
			<div class="form-group">
				<label>ID Barang: </label>
				<input type="text" name="id_barang" class="form-control" placeholder="Masukkan ID Barang" 
				required value="<?php echo $id_barang; ?>">
			</div>
			<div class="form-group">
				<label>ID Pelanggan: </label>
				<input type="text" name="id_pelanggan" class="form-control" placeholder="Masukkan ID Pelanggan" 
				required value="<?php echo $id_pelanggan; ?>">
			</div>
			<div class="form-group">
				<label>Isi Komentar: </label>
				<input type="text" name="isi_komentar" class="form-control" placeholder="Tulis Isi Komentar Kamu"
				value="<?php echo $isi_komentar; ?>"><br/>
			</div>
			<input type="hidden" name="id_komentar" value="<?php echo $id_komentar; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('komentar')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>


<?php $this->load->view('templates/footer'); ?>