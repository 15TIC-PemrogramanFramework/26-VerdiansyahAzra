<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'"><i class="fa fa-dashboard"></i> Dashboard</a>
	</li>	
	<li>
			<a href="#"><i class="fa fa-table fa-fw"></i>Table<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="'.site_url('index.php/Barang/index').'">Barang</a>
				</li>
				<li>
					<a href="'.site_url('beli').'">Beli</a>
				</li>
				<li>
					<a href="'.site_url('pelanggan').'">Pelanggan</a>
				</li>
				<li>
					<a href="'.site_url('komentar').'">Komentar</a>
				</li>
			</ul>
		</li>';
	}
	