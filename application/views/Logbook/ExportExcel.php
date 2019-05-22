<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table>
  <tr>
    <h1>LOGBOOK PANGKALAN</h1>
  </tr>
</table>

 <a href="<?php echo site_url()."/Logbook/export_excel/"; ?>">

<table border="1" width="100%">

<thead>

<tr>

 <th width="9%">Nama Pembeli </th>
 <th width="9%">Jenis Pembeli</th>
 <th width="9%">Alamat Pembeli</th>
 <th width="9%">Keterangan</th>

 </tr>

</thead>

<tbody>

<?php foreach ($Logbook as $key) { ?>

  <tr>
    <td><?php echo $key['NamaPembeli']?></td>
    <td><?php echo $key['JenisPembeli']?></td>
    <td><?php echo $key['AlamatPembeli']?></td>
    <td><?php echo $key['Keterangan']?></td>
  </tr>

<?php } ?>

</tbody>

</table>