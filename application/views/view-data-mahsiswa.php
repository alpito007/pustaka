<html>
<head>
 <title> Data mahasiswa </title>
</head>
<body>
<?php
$nama =$_POST['nama'];
$NIS =$_POST['NIS'];
$kelas =$_POST['kelas'];
$alamat =$_POST['alamat'];
$tempatl =$_POST['tempatl'];
$tanggall =$_POST['tanggall'];
$jeniskel=$_POST['jeniskel'];
$agama=$_POST['agama'];
?>
<table border=1 bgcolor="Cyan">
<tr>
<td colspan=2 align="center"><b>Data mahasiswa</b></td>
</tr>
<tr>
<td>nama</td><td><?php echo $nama; ?></td>
</tr>
<td>NIS</td><td><?php echo $NIS; ?></td>
</tr>
<td>kelas</td><td><?php echo $kelas; ?></td>
</tr>
<td>alamat</td><td><?php echo $alamat; ?></td>
</tr>
<td>tempat lahir</td><td><?php echo $tempatl ?></td>
</tr>
<td>tanggal lahir</td><td><?php echo $tanggall; ?></td>
</tr>
<td>jenis kelamin</td><td><?php echo $jeniskel; ?></td>
</tr>
<td>agama</td><td><?php echo $agama; ?></td>
</tr></table>
<a href="mahasiswa">back to home</a>
</body>
</html>
