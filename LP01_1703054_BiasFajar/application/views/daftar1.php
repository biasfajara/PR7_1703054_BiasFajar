<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter CRUD</title>
  </head>
  <body>
    <h1 align="center">RIGHT JOIN</h1>
    <hr>
    <div style="display:inline-block; margin-left:800px;" align="center">
        <a><?php echo anchor('Gerbong/index','Left Join'); ?></a>
        <a><?php echo anchor('Gerbong/index1','Right Join'); ?></a>
        <a><?php echo anchor('Gerbong/index2','Inner Join'); ?></a>
    </div>
    <table border="1" cellspacing="0" cellpadding="8" align="center">
      <thead>
        <th>no</th>
        <th>Kode kursi</th>
        <th>Kode gerbong</th>
        <th>Kode kereta</th>
        <th>Nama</th>
      </thead>
      <tbody>
        <?php
        $no =1;
        foreach ($kursi as $value): ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $value->kd_kursi ?></td>
            <td><?php echo $value->kd_gerbong ?></td>
            <td><?php echo $value->kd_kereta ?></td>
            <td><?php echo $value->nama ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
<?php
 ?>
