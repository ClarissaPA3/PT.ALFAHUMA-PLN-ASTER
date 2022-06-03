
    <table class="table table-striped">
  <tr>
   <th>#</th>
   <th>id_anggota</th>
   <th>catatan_dm2</th>
   <th>total_pengajuan2</th>
   <th>minggu2</th>
   <th>bulan2</th>
   <th>catatan_dmpau2</th>
   <th>status2</th>
   <th>tanggal_mulai2</th>
   <th>tanggal_sampai2</th>
   <th>tgl_pengajuan2</th>

  </tr>
  <?php $no=1; foreach ($mahasiswa as $row): ?>
   <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $row->id_anggota ?></td>
    <td><?php echo $row->catatan_dm2 ?></td>
    <td><?php echo $row->total_pengajuan2 ?></td>
    <td><?php echo $row->minggu2 ?></td>
    <td><?php echo $row->bulan2 ?></td>
    <td><?php echo $row->catatan_dmpau2 ?></td>
    <td><?php echo $row->status2 ?></td>
    <td><?php echo $row->tanggal_mulai2 ?></td>
    <td><?php echo $row->tanggal_sampai2 ?></td>
    <td><?php echo $row->tgl_pengajuan2 ?></td>

   </tr>
  <?php endforeach ?>
 </table>
    