<!DOCTYPE html>
<html>
<head>
	<title><?= $judul ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, user-scalable=no, width=device-width">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bin/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bin/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bin/medium.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bin/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		li.menu-<?= $menu ?> {
			background: #ee6e73;
		}
		li.menu-<?= $menu ?> a {
			color: #fff;
		}
	</style>
	<script type="text/javascript">
		document.writeln('<scr'+'ipt type="text/javascript" src="<?= base_url() ?>bin/jquery.min.js?'+Math.random()+'"></scr'+'ipt>');
		document.writeln('<scr'+'ipt type="text/javascript" src="<?= base_url() ?>bin/jquery.viewportchecker.min.js?'+Math.random()+'"></scr'+'ipt>');
		document.writeln('<scr'+'ipt type="text/javascript" src="<?= base_url() ?>bin/materialize/js/materialize.min.js?'+Math.random()+'"></scr'+'ipt>');
		document.writeln('<scr'+'ipt type="text/javascript" src="<?= base_url() ?>bin/app.js?'+Math.random()+'"></scr'+'ipt>');
	</script>
</head>
<body>
	<div class="navbar-fixed">
    	<nav>
      		<div class="nav-wrapper">
        		<a href="#!" class="brand-logo"><?= $judul ?></a>
        		<a href="#!" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		    </div>
	    </nav> 
	</div>
	<ul class="sidenav" id="mobile-demo">
	    <li class="menu-beranda"><a href="<?= base_url() ?>index.php/home/beranda">Beranda</a></li>
	    <li class="menu-mengapa_kelebihan"><a href="<?= base_url() ?>index.php/home/mengapa_kelebihan">Mengapa?</a></li>
	    <li class="menu-siapa_dapat_bersekolah"><a href="<?= base_url() ?>index.php/home/siapa_dapat_bersekolah">Siapa Saja?</a></li>
	    <li class="menu-akan_jadi_apa"><a href="<?= base_url() ?>index.php/home/akan_jadi_apa">Jadi Apa?</a></li>
	    <li class="menu-kualitas_guru"><a href="<?= base_url() ?>index.php/home/kualitas_guru">Kualitas Guru</a></li>
	    <li class="menu-proses_belajar"><a href="<?= base_url() ?>index.php/home/proses_belajar">Proses Belajar Mengajar</a></li>
	    <li class="menu-metode_belajar"><a href="<?= base_url() ?>index.php/home/metode_belajar">Metode Belajar</a></li>
	    <li class="menu-lingkungan"><a href="<?= base_url() ?>index.php/home/lingkungan">Lingkungan</a></li>
	    <li class="menu-diajarkan"><a href="<?= base_url() ?>index.php/home/diajarkan">Diajarkan</a></li>
	    <li class="menu-evaluasi"><a href="<?= base_url() ?>index.php/home/evaluasi">Evaluasi</a></li>
	</ul>
	<div class="medium container">
		<?php
			$this->load->view($isi);
		?>
		<p>&nbsp;</p>
	</div>
	<center>
		<p class="kembali">
			<a href="<?= base_url() ?>index.php/home/beranda" class="btn waves-effect waves-light">&larr; Kembali</a>
		</p>
	</center>
	<br>
</body>
</html>