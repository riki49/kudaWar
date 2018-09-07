<!DOCTYPE>
<html>
<head>
  <title>Laporan data Warga</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
}
th {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
    color: #ffffff;
    background-color: #000000;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body> 
  <span align="center" style="">
    <div><img src="<?php echo base_url() ?>/assets/images/b2.jpg" width="200"/></div>
    <h2>Laporan Data Warga</h2>
    <h1>Desa Sukamenak</h1>
	</span>
<hr>
<br>
<table id="t01" align="center">
  <tr align="center">
  <th >Nomer Induk </th>
  <th >Nama Lengkap</th>
  <th >Tempat/Tanggal Lahir</th>
  <th >kelamin</th>
  <th >Nama Kampung</th>
  <th >RW/RW</th>
  <th >status</th>
  <th >Pekerjaan</th>
  <th >agama</th>

 </tr>
  <?php 
    foreach ($report as $key) :   
  ?>
  <tr>
  <!-- <td><?php echo $key->nik?></td> -->
  <td><?php echo $key->nama?></td>
  <td><?php echo $key->level ."/". $key->tgl_produksi?></td>
  <td><?php echo $key->tgl_produksi?></td>
  <td><?php echo $key->harga?></td>
  <td><?php echo $key->jumlah?></td>
  <td><?php echo $key->pekerjaan?></td>

  </tr>
  <?php endforeach; ?>
  
</table>
  
</body>
</html>
