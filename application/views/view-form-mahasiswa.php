<html>
<head>
    <title> form mahasiswa</title>
</head>
<body>
<form action="<?= base_url('mahasiswa/cetak'); ?>"
<h1>form mahasiswa</h1>
<br>
<b> isi data dibawah ini :</b>
<pre>
    nama            : <input type="text" name="nama" size="25" maxlength="50">
    NIS             : <input type="text" name="NIS" size="25" maxlength="50">
    kelas           : <input type="text" name="kelas" size="25" maxlength="50">
    alamat          : <textarea name="alamat" rows="3" cols="40"></textarea>
    tempat lahir    : <input type="text" name="tempatl" size="25" maxlength="50">
    tanggal lahir   :  <input type="text" name="tanggall" size="25" maxlength="50">
</pre>
jenis kelamin
<input type="radio" name="jeniskel" value="laki-laki"> laki-laki
<input type="radio" name="jeniskel" value="perempuan"> perempuan
<p>
    agama
    <select name="agama">
    <option value="-pilih-">
    <option value="islam">islam
    <option value="kristen">kristen
    <option value="katolik">katolik
    <option value="budha">budha
    <option value="hindu">hindu
    <option value="khonguchu">khonguchu
</select>
<p>
    <input type="submit" value="kirim"><input type="reset" value="cancel">
</form>
</body>
</html>