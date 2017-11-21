<?php $this->load->view('templates/header');?>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">List Pelanggan Tas Koper</h1>
		</div>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" 
				required value="<?php echo $nama; ?>">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin: </label>
				<input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin Anada" 
				required value="<?php echo $jk; ?>">
			</div>
			<div class="form-group">
				<label>Asal Daerah: </label>
				<input type="text" name="asal_daerah" class="form-control" placeholder="Masukkan Asal Daerah Anda" 
				required value="<?php echo $asal_daerah; ?>">
			</div>
			<div class="form-group">
				<label>Umur: </label>
				<input type="text" name="umur" class="form-control" placeholder="Inputkan Umur Anda" 
				required value="<?php echo $umur; ?>">
			</div>
			<div class="form-group">
				<label>Email: </label>
				<input type="text" name="email" class="form-control" placeholder="Email Kalian Anda" 
				required value="<?php echo $email; ?>">
			</div>
			<div class="form-group">
				<label>No Hp: </label>
				<input type="text" name="noHP" class="form-control" placeholder="Inputkan No HP"
				value="<?php echo $noHP; ?>"><br/>
			</div>
			<input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('pelanggan')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>




<?php $this->load->view('templates/footer'); ?>