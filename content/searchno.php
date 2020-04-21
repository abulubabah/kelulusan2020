<html>
<head>
<title> Hasil Pencarian </title>
</head>
<body>
<?php
include "../config.php";
$noujian= $_POST['noujian']; //get the nama value from form
$q = "SELECT * from tb_student where noujian = '$noujian' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
$num_rows = mysql_num_rows($result);
if($num_rows == 0) echo "<br><div align='center' class='alert alert-dismissable alert-danger'><h4>Maaf, Nomor Peserta Ujian Salah Atau Tidak Ada Dalam Database!</h4></div><meta http-equiv='refresh' content='2; url=index.php'>";
else 
echo "<div align='center'><h4>Hasil Pencarian</h4></div>";
echo "<table width='400' class='table table-striped table-hover'>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
 <tr class='active'>
    <td width='180'>No Peserta </td>
    <td colspan='3'><strong>".$data['noujian']."</strong></td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td colspan='3'><font style='text-transform: capitalize;'><strong>".$data['name']."</strong></font></td>
  </tr>
  <tr class='active'>
    <td>Mata Pelajaran</td>
    <td width='140'><div align='center'>Nilai UN</div></td>
    <td width='140'><div align='center'>Nilai Sekolah</div></td>
    <td width='140'><div align='center'>Nilai Akhir </div></td>
  </tr>
  <tr class='danger'>
    <td>Bahasa Indonesia</td>
    <td><div align='center'>".$data['indo']."</div></td>
    <td><div align='center'>".$data['nsindo']."</div></td>
    <td><div align='center'>".$data['naindo']."</div></td>
  </tr>
  <tr class='success'>
    <td>Bahasa Inggris</td>
    <td><div align='center'>".$data['inggris']."</div></td>
    <td><div align='center'>".$data['nsinggris']."</div></td>
    <td><div align='center'>".$data['nainggris']."</div></td>
  </tr>
  <tr class='warning'>
    <td>Matematika</td>
    <td><div align='center'>".$data['mat']."</div></td>
    <td><div align='center'>".$data['nsmat']."</div></td>
    <td><div align='center'>".$data['namat']."</div></td>
  </tr>
  <tr class='info'>
    <td>IPA</td>
    <td><div align='center'>".$data['ipa']."</div></td>
    <td><div align='center'>".$data['nsipa']."</div></td>
    <td><div align='center'>".$data['naipa']."</div></td>
  </tr>
  <tr>
    <td><strong>Rata-rata</strong></td>
    <td><strong><div align='center'>".$data['rataun']."</div></strong></td>
    <td><strong><div align='center'>".$data['ratans']."</div></strong></td>
    <td><strong><div align='center'>".$data['ratana']."</div></strong></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td colspan='3'><font color='#0066FF' size='5' style='text-transform: uppercase;'>".$data['ket']."</td>
  </tr>";
echo "</table>";
echo "<div align='center'><a href='cetaksk.php?noujian=".$data['noujian']."' class='btn btn-success'>Cetak Surat Keterangan Kelulusan</a></div>";
}
?>
</body>
</html>