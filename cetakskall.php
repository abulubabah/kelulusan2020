<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cetak Semua SK</title>
<style>
    @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div align="right"><button class="no-print" onclick="window.print();">Cetak Semua</button></div>
<?php
include('config.php');
$q = mysql_query("SELECT * FROM tb_student");
while($r = mysql_fetch_array($q))
{
  echo '<table width="800" align="center">';
  echo '<tr>
    <td><img src="images/logo-MTs.gif" width="107" height="107" /> <hr></td>
    <td colspan="3"><div align="center">
      <h3>LEMBAGA PENDIDIKAN MA"ARIF NAHDLATUL ULAMA<br></h3>
      <h2>MADRASAH TSANAWIYAH AL MA"ARIF II<br></h2>
        Alamat : Sidorejo, Tirtomoyo, Wonogiri Kode Pos:57672<br> Website : www.mtsalmawa.sch.id - e-mail : mts.almaarif2@yahoo.com</h3>
    </div><hr></td>
  </tr>';
  
   echo '<tr>
    <td colspan="4"><div align="center">
      <br>
      <p><b><u>SURAT KETERANGAN KELULUSAN</u></b>
      <br>Nomor : Mts.11.12.702/PP.01.1/05/2018</p>
    </div></td>
  </tr>';
  
  echo '<tr>
    <td colspan="4"><div align="justify">
      <br>
      <p>Yang bertanda tangan di bawah ini Kepala MTs Al MA"ARIF II TIRTOMOYO Menerangkan Bahwa :</p>
      <p><br />
      </p>
    </div></td>
  </tr>';
  echo '<tr>
    <td width="107">&nbsp;</td>
    <td width="129">No Ujian</td>
    <td colspan="2">: '.$r['noujian'].' </td>
  </tr>';
  echo '<tr>
    <td>&nbsp;</td>
    <td>Nama</td>
    <td colspan="2">: '.$r['name'].' </td>
  </tr>';
  echo '<tr>
    <td>&nbsp;</td>
    <td>Tanggal Lahir</td>
    <td colspan="2">: '.$r['tgllhr'].' </td>
  </tr>';
  echo '<tr>
    <td>&nbsp;</td>
    <td>Kelas</td>
    <td colspan="2">: IX (Sembilan) </td>
  </tr>';

  echo '<tr>
    <td colspan="4"><div align="justify">
      <p>&nbsp;</p>
      <p>Telah mengikuti Ujian Nasional, Ujian Tulis Sekolah dan Ujian Praktik Sekolah pada <br>Tahun Pelajaran 2017/2018 di MTs AL MA"ARIF II TIRTOMOYO dinyatakan:</p>
    </div></td>
  </tr>';
  
    echo '<tr>
    <td></td>
    <td></td>
    <td><div align="center"><img src="images/'.$r['ketgambar'].'.jpg" width="200" height="50"/></div></td>
  </tr>';
  
      echo '<tr>
    <p>&nbsp;</p>
    <td colspan="4"><div align="justify">
      <p>Dengan nilai sebagai berikut :</p>
    <td></td>
    </div></td>
  </tr>';
  
  echo '<tr>
  <td colspan="4"><div align="justify">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mata Pelajaran</th>
        <th>Nilai UNBK</th>
        <th>Nilai USBN</th>
        <th>Nilai Akhir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bahasa Indonesia</td>
        <td>'.$r['indo'].'</td>
        <td>'.$r['nsindo'].'</td>
        <td>'.$r['naindo'].'</td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td>'.$r['mat'].'</td>
        <td>'.$r['nsmat'].'</td>
        <td>'.$r['namat'].'</td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td>'.$r['inggris'].'</td>
        <td>'.$r['nsinggris'].'</td>
        <td>'.$r['nainggris'].'</td>
      </tr>
        <td>IPA</td>
        <td>'.$r['ipa'].'</td>
        <td>'.$r['nsipa'].'</td>
        <td>'.$r['naipa'].'</td>
      </tr>
    </tbody>
  </table>
</div></td>
</tr>';


    echo '<tr>
    <td colspan="4"><div align="justify">
      <p>&nbsp;</p>
      <p>Demikian Surat Keterangan ini agar dipergunakan sebagaimana mestinya.</p>
      <p>&nbsp;</p>
    </div></td>
  </tr>';
  
  
  echo '<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="321"><p>Wonogiri, 23 Mei 2018  <br />
      Kepala Madrasah,</p>
      <p><img src="images/ttd.jpg" width="100" height="100" />  <br />
        HISYAM, S.E.<br>
    NIP. -</p></td>
  </tr>';
  echo '<tr>
    <td colspan="4"><p>&nbsp;</p>
    <p>Catatan :  <br />- Bagi siswa yang belum menyelesaikan administrasi harap segera diselesaikan.<br />  - Untuk siswa yang mendapatkan keterangan PANGGILAN. Silakan datang kesekolah  hubungi panitia.</p></td>
  </tr>';
echo '</table>
  <br>
  <br>';
  echo '<p style="page-break-after:always;"></p>';
}
?>
</body>
</html>