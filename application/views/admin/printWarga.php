<!DOCTYPE>
<html>
<head>
<style>

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
</style>
</head>
<body> 
  <div align="center">
    <img src="<?php echo base_url() ?>/assets/images/b2.jpg" width="460" >
  </div>
    
<hr>
<h3 align="center">Laporan Transaksi
</h3><br>
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
  <td><?php echo $key->nik?></td>
  <td><?php echo $key->nama?></td>
  <td><?php echo $key->tempat."/".$key->tanggal?></td>
  <td><?php echo $key->kelamin?></td>
  <td><?php echo $key->alamat?></td>
  <td><?php echo $key->rt."/".$key->rw?></td>
  <td><?php echo $key->status?></td>
  <td><?php echo $key->pekerjaan?></td>
  <td><?php echo $key->agama?></td>

  </tr>
  <?php endforeach; ?>
  
</table>

</body>
</html>