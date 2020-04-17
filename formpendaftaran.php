<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<style>
	.warning {color: #FF0000;}
</style>
</head>
<body>

<?php
include"koneksi.php";
?>

<?php
$error_nama = "";
$error_jkel = "";
$error_nisn = "";
$error_nik = "";
$error_tmpt = "";
$error_tgl = "";
$error_akta = "";
$error_agama = "";
$error_kwn = "";
$error_abk = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kdpos = "";
$error_lintang = "";
$error_bujur = "";
$error_tinggal = "";
$error_transport = "";
$error_kks = "";
$error_anak = "";
$error_penerima = "";
$error_kps = "";

$nama = "";
$jkel = "";
$nisn = "";
$nik = "";
$tmpt = "";
$tgl = "";
$akta = "";
$agama = "";
$kwn = "";
$abk = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kdpos = "";
$lintang = "";
$bujur = "";
$tinggal = "";
$transport = "";
$kks = "";
$anak = "";
$penerima = "";
$kps = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//nama
	if (empty($_POST["nama"]))
	{
		$error_nama = "Nama tidak boleh kosong";
	}
	else
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nama))
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		}	
	}

	//jenis kelamin
	if (empty($_POST["jkel"]))
	{
		$error_jkel = "Jenis kelamin tidak boleh kosong";
	}
	else
	{ 
		$jkel = cek_input($_POST["jkel"]);
		if (!filter_var($jkel))
		{
			$error_jkel = "";
		}
	}

	//nisn
	if (empty($_POST["nisn"]))
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]);
		if (!is_numeric($nisn))
		{
			$error_nisn = 'NISN hanya boleh angka';
		}	
	}

	//nik
	if (empty($_POST["nik"]))
	{
		$error_nik = "NIK tidak boleh kosong";
	}
	else
	{
		$nik = cek_input($_POST["nik"]);
		if (!is_numeric($nik))
		{
			$error_nik = 'NIK hanya boleh angka';
		}	
	}

	//tempat lahir
	if (empty($_POST["tmpt"]))
	{
		$error_tmpt = "Tempat lahir tidak boleh kosong";
	}
	else
	{
		$tmpt = cek_input($_POST["tmpt"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$tmpt))
		{
			$error_tmpt = "Inputan hanya boleh huruf dan spasi";
		}	
	}

	//tanggal lahir
	if (empty($_POST["tgl"]))
	{
		$error_tgl = "Tanggal lahir tidak boleh kosong";
	}
	else
	{ 
		$tgl = cek_input($_POST["tgl"]); 
	}

	//nomor registrasi akta
	if (empty($_POST["akta"]))
	{
		$error_akta = "No regis akta lahir tidak boleh kosong";
	}
	else
	{
		$akta = cek_input($_POST["akta"]);
		if (!is_numeric($akta))
		{
			$error_akta = 'No regis akta lahir hanya boleh angka';
		}	
	}

	//agama
	if (empty($_POST["agama"]))
	{
		$error_agama = "Agama tidak boleh kosong";
	}
	else
	{ 
		$agama = cek_input($_POST["agama"]);
		if (!filter_var($agama))
		{
			$error_agama = "Pilih Salah Satu";
		}
	}		

	//kewarganegaraan
	if (empty($_POST["kwn"]))
	{
		$error_kwn = "Kewarganegaraan tidak boleh kosong";
	}
	else
	{ 
		$kwn = cek_input($_POST["kwn"]);
		if (!filter_var($kwn))
		{
			$error_kwn = "";
		}
	}

	//berkebutuhan khusus
	if (empty($_POST["abk"]))
	{
		$error_abk = "Berkebutuhan khusus tidak boleh kosong";
	}
	else
	{ 
		$abk = cek_input($_POST["abk"]);
		if (!filter_var($abk))
		{
			$error_abk = "";
		}
	}

	//alamat
	if (empty($_POST["alamat"]))
	{
		$error_alamat = "Alamat tidak boleh kosong";
	}
	else
	{ 
		$alamat = cek_input($_POST["alamat"]); 
	}

	//rt
	if (empty($_POST["rt"]))
	{
		$error_rt = "RT tidak boleh kosong";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);
		if (!is_numeric($rt))
		{
			$error_rt = 'RT hanya boleh angka';
		}	
	}

	//rw
	if (empty($_POST["rw"]))
	{
		$error_rw = "RW tidak boleh kosong";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);
		if (!is_numeric($rw))
		{
			$error_rw = 'RW hanya boleh angka';
		}	
	}

	//nama dusun
	if (empty($_POST["dusun"]))
	{
		$error_dusun = "Nama dusun tidak boleh kosong";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$dusun))
		{
			$error_dusun = "Inputan hanya boleh huruf dan spasi";
		}	
	}

	//nama kelurahan
	if (empty($_POST["kelurahan"]))
	{
		$error_kelurahan = "Nama kelurahan tidak boleh kosong";
	}
	else
	{
		$kelurahan = cek_input($_POST["kelurahan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kelurahan))
		{
			$error_kelurahan = "Inputan hanya boleh huruf dan spasi";
		}	
	}

	//nama kecamatan
	if (empty($_POST["kecamatan"]))
	{
		$error_kecamatan = "Nama kecamatan tidak boleh kosong";
	}
	else
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kecamatan))
		{
			$error_kecamatan = "Inputan hanya boleh huruf dan spasi";
		}	
	}

	//kode pos
	if (empty($_POST["kdpos"]))
	{
		$error_kdpos = "Kode pos tidak boleh kosong";
	}
	else
	{
		$kdpos = cek_input($_POST["kdpos"]);
		if (!is_numeric($kdpos))
		{
			$error_kdpos = 'Kode pos hanya boleh angka';
		}	
	}

	//lintang
	if (empty($_POST["lintang"]))
	{
		$error_lintang = "Lintang tidak boleh kosong";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);	
	}

	//bujur
	if (empty($_POST["bujur"]))
	{
		$error_bujur = "Bujur tidak boleh kosong";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
	}

	//tempat tinggal
	if (empty($_POST["tinggal"]))
	{
		$error_tinggal = "Tempat tinggal tidak boleh kosong";
	}
	else
	{ 
		$tinggal = cek_input($_POST["tinggal"]);
		if (!filter_var($tinggal))
		{
			$error_tinggal = "Pilih Salah Satu";
		}
	}

	//moda transportasi
	if (empty($_POST["transport"]))
	{
		$error_transport = "Moda transportasi tidak boleh kosong";
	}
	else
	{ 
		$transport = cek_input($_POST["transport"]);
		if (!filter_var($transport))
		{
			$error_transport = "Pilih Salah Satu";
		}
	}

	//nomor kks
	if (empty($_POST["kks"]))
	{
		$error_kks = "Nomor KKS tidak boleh kosong";
	}
	else
	{
		$kks = cek_input($_POST["kks"]);
		if (!is_numeric($kks))
		{
			$error_kks = 'Nomor kks hanya boleh angka';
		}	
	}

	//anak ke
	if (empty($_POST["anak"]))
	{
		$error_anak = "Anak ke tidak boleh kosong";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);
		if (!is_numeric($anak))
		{
			$error_anak = 'Anak ke hanya boleh angka';
		}	
	}

	//penerima kps
	if (empty($_POST["penerima"]))
	{
		$error_penerima = "Penerima KPS tidak boleh kosong";
	}
	else
	{ 
		$penerima = cek_input($_POST["penerima"]);
		if (!filter_var($penerima))
		{
			$error_penerima = "Pilih Salah Satu";
		}
	}

	//nomor kps
	$kps = cek_input($_POST["kps"]);
		if (!is_numeric($kps))
		{
			$error_kps = 'Nomor kps hanya boleh angka';
		}	
}

$conn = mysqli_connect($servername, $username, $password);
if(!$conn) {
	die("Koneksi Gagal : ".mysqli_connect_error());
}

$conndb = mysqli_select_db($conn, 'praktikum10');
if(!$conndb) {
	die("Koneksi Database Gagal : ".mysqli_error());
}
$sql = "INSERT INTO daftar (nama, jkel, nisn, nik, tmpt, tgl, akta, agama, kwn, abk, alamat, rt, rw, dusun, kelurahan, kecamatan, kdpos, lintang, bujur, tinggal, transport, kks, anak, penerima, kps)
VALUES ('$nama', '$jkel', '$nisn', '$nik', '$tmpt', '$tgl', '$akta', '$agama', '$kwn', '$abk', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$kdpos', '$lintang', '$bujur', '$tinggal', '$transport', '$kks', '$anak', '$penerima', '$kps')";
mysqli_query($conn, $sql) or die (mysqli_error($conn));

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
<div class="col-md-6">
<div class="card">
	<div class="card-header">
		FORMULIR PESERTA DIDIK
	</div>

<div class="card-body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<div class="form-group row">
		<label for="nama" class="col-sm-10 col-form-label">Nama Lengkap</label>
		<div class="col-sm-10">
			<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder="Nama lengkap" value="<?php echo $nama; ?>"><span class="warning"> <?php echo $error_nama; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="jkel" class="col-sm-10 col-form-label">Jenis Kelamin</label>
		<div class="col-sm-10">
			<input type="radio" name="jkel" <?php if (isset($jkel) && $jkel=="Laki-laki") echo "checked";?> value="Laki-laki">Laki-laki 
			<input type="radio" name="jkel" <?php if (isset($jkel) && $jkel=="Perempuan") echo "checked";?> value="Perempuan">Perempuan<span class="warning"><?php echo $error_jkel; ?></span> 
		</div>
	</div>
	<div class="form-group row">
		<label for="nisn" class="col-sm-10 col-form-label">NISN</label>
		<div class="col-sm-10">
			<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="10 digit" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="nik" class="col-sm-10 col-form-label">NIK / No. KITAS (Untuk WNA)</label>
		<div class="col-sm-10">
			<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="16 digit" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="tmpt" class="col-sm-10 col-form-label">Tempat Lahir</label>
		<div class="col-sm-10">
			<input type="text" name="tmpt" class="form-control <?php echo($error_tmpt !="" ? "is-invalid" : ""); ?>" id="tmpt" placeholder="Tempat lahir" value="<?php echo $tmpt; ?>"><span class="warning"><?php echo $error_tmpt; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="tgl" class="col-sm-10 col-form-label">Tanggal Lahir</label>
		<div class="col-sm-10">
			<input type="date" name="tgl" class="<?php echo($error_tgl !="" ? "is-invalid" : ""); ?>" id="tgl" placeholder="Tanggal lahir" value="<?php echo $tgl; ?>"><span class="warning"><?php echo $error_tgl; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="akta" class="col-sm-10 col-form-label">No Registrasi Akta Lahir</label>
		<div class="col-sm-10">
			<input type="text" name="akta" class="form-control <?php echo($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="No registrasi akta" value="<?php echo $akta; ?>"><span class="warning"><?php echo $error_akta; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="agama" class="col-sm-10 col-form-label">Agama & Kepercayaan</label>
		<div class="col-sm-10">
		<select name="agama" required>
			<option value="Islam" class="<?= ($_POST["agama"]=="1")?"selected":"" ?>">Islam</option>
			<option value="Kristen" class="<?= ($_POST["agama"]=="2")?"selected":"" ?>">Kristen/Protestan</option>
			<option value="Katolik" class="<?= ($_POST["agama"]=="3")?"selected":"" ?>">Katolik</option>
			<option value="Hindu" class="<?= ($_POST["agama"]=="5")?"selected":"" ?>">Hindu</option>
			<option value="Budha" class="<?= ($_POST["agama"]=="4")?"selected":"" ?>">Budha</option>
			<option value="Kong Hu Cu" class="<?= ($_POST["agama"]=="6")?"selected":"" ?>">Kong Hu Cu</option>
			<option value="Percaya" class="<?= ($_POST["agama"]=="7")?"selected":"" ?>">Kepercayaan pada Tuhan YME</option>
		</select><span class="warning"><?php echo $error_agama; ?></span> 
		</div>
	</div>
	<div class="form-group row">
		<label for="kwn" class="col-sm-10 col-form-label">Kewarganegaraan</label>
		<div class="col-sm-10">
			<input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="Indonesia") echo "checked";?>  value="Indonesia">Indonesia (WNI) 
			<input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="Asing") echo "checked";?>  value="Asing">Asing (WNA)<span class="warning"><?php echo $error_kwn; ?></span> 
		</div>
	</div>	
	<div class="form-group row">
		<label for="abk" class="col-sm-10 col-form-label">Berkebutuhan Khusus</label>
		<div class="col-sm-10">
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="Iya") echo "checked";?>  value="Iya">Iya 
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="Tidak") echo "checked";?>  value="Tidak">Tidak<span class="warning"><?php echo $error_abk; ?></span> 
		</div>
	</div>
	<div class="form-group row">
		<label for="alamat" class="col-sm-10 col-form-label">Alamat Jalan</label>
		<div class="col-sm-10">
			<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : "");?>" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="rt" class="col-sm-10 col-form-label">RT</label>
		<div class="col-sm-10">
			<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : "");?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="rw" class="col-sm-10 col-form-label">RW</label>
		<div class="col-sm-10">
			<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : "");?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="dusun" class="col-sm-10 col-form-label">Nama Dusun</label>
		<div class="col-sm-10">
			<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : "");?>" id="dusun" placeholder="Nama dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="kelurahan" class="col-sm-10 col-form-label">Nama Kelurahan / Desa</label>
		<div class="col-sm-10">
			<input type="text" name="kelurahan" class="form-control <?php echo ($error_kelurahan !="" ? "is-invalid" : "");?>" id="kelurahan" placeholder="Nama kelurahan" value="<?php echo $kelurahan; ?>"><span class="warning"><?php echo $error_kelurahan; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="kecamatan" class="col-sm-10 col-form-label">Kecamatan</label>
		<div class="col-sm-10">
			<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : "");?>" id="kecamatan" placeholder="Nama kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="kdpos" class="col-sm-10 col-form-label">Kode Pos</label>
		<div class="col-sm-10">
		<input type="text" name="kdpos" class="form-control <?php echo ($error_kdpos !="" ? "is-invalid" : "");?>" id="kdpos" placeholder="Kode pos" value="<?php echo $kdpos; ?>"><span class="warning"><?php echo $error_kdpos; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="lintang" class="col-sm-10 col-form-label">Lintang</label>
		<div class="col-sm-10">
			<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : "");?>" id="lintang" placeholder="Titik koordinat" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="bujur" class="col-sm-10 col-form-label">Bujur</label>
		<div class="col-sm-10">
			<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : "");?>" id="bujur" placeholder="Titik koordinat" value="<?php echo $bujur; ?>"> <span class="warning"> <?php echo $error_bujur; ?> </span>
		</div>
	</div>
	<div class="form-group row">
		<label for="tinggal" class="col-sm-10 col-form-label">Tempat Tinggal</label>
		<div class="col-sm-10">
		<select name="tinggal" required>
			<option value="Bersama Orang tua" class="<?= ($_POST["tinggal"]=="1")?"selected":"" ?>">Bersama Orang tua</option>
			<option value="Wali" class="<?= ($_POST["tinggal"]=="2")?"selected":"" ?>">Wali</option>
			<option value="Kos" class="<?= ($_POST["tinggal"]=="3")?"selected":"" ?>">Kos</option>
			<option value="Asrama" class="<?= ($_POST["tinggal"]=="4")?"selected":"" ?>">Asrama</option>
			<option value="Panti" class="<?= ($_POST["tinggal"]=="5")?"selected":"" ?>">Panti Asuhan</option>
			</select><span class="warning"><?php echo $error_tinggal; ?></span> 
		</div>
	</div>
	<div class="form-group row">
		<label for="transport" class="col-sm-10 col-form-label">Moda Transportasi</label>
		<div class="col-sm-10">
		<select name="transport" required>
			<option value="Jalan kaki" class="<?= ($_POST["transport"]=="1")?"selected":"" ?>">Jalan Kaki</option>
			<option value="Kendaraan pribadi" class="<?= ($_POST["transport"]=="2")?"selected":"" ?>">Kendaraan Pribadi</option>
			<option value="Kendaraan umum" class="<?= ($_POST["transport"]=="3")?"selected":"" ?>">Kendaraan Umum/Angkot/Pete-pete</option>
			<option value="Ojek" class="<?= ($_POST["transport"]=="4")?"selected":"" ?>">Ojek</option>
		</select><span class="warning"><?php echo $error_transport; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="kks" class="col-sm-10 col-form-label">Nomor KKS (Kartu Keluarga Sejahtera)</label>
		<div class="col-sm-10">
			<input type="text" name="kks" class="form-control <?php echo ($error_kks !="" ? "is-invalid" : "");?>" id="kks" placeholder="6 digit" value="<?php echo $kks; ?>"><span class="warning"><?php echo $error_kks; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="anak" class="col-sm-10 col-form-label">Anak ke-berapa (berdasarkan KK)</label>
		<div class="col-sm-10">
			<input type="text" name="anak" class="form-control <?php echo ($error_anak !="" ? "is-invalid" : "");?>" id="anak" placeholder="Berdasarkan KK" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="penerima" class="col-sm-10 col-form-label">Penerima KPS/PKH</label>
		<div class="col-sm-10">
			<input type="radio" name="penerima" class="<?php if (isset($penerima) && $penerima=="Iya") echo "checked";?>"  value="Iya">Iya 
			<input type="radio" name="penerima" class="<?php if (isset($penerima) && $penerima=="Tidak") echo "checked";?>"  value="Tidak">Tidak<span class="warning"><?php echo $error_penerima; ?></span> 
		</div>
	</div>
	<div class="form-group row">
		<label for="kps" class="col-sm-10 col-form-label">Nomor KPS/PKH (apabila menerima)</label>
		<div class="col-sm-10">
			<input type="text" name="kps" class="form-control <?php echo ($error_kps !="" ? "is-invalid" : "");?>" id="kps" placeholder="*apabila menerima" value="<?php echo $kps; ?>"><span class="warning"><?php echo $error_kps; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary">Daftar</button>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>	
</body>
</html>