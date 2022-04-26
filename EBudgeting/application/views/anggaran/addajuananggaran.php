<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah ajuan</title>
</head>
<body>

    <form action="<?php echo site_url('C_ajuananggaran/update_datapengajuan');?>" method="post">

    
        <input type="hidden" name="id_pengajuan" value="<?php echo $ajuan['id_pengajuan'];?>">
        <input type="hidden" name="id_anggota" value="<?php echo $ajuan['id_anggota'];?>">
        <input type="text" name="total_pengajuan2" id="total_pengajuan2" placeholder="total pengajuan" value="<?php echo $ajuan['total_pengajuan2'];?>">
        <input type="text" name="minggu2" id="minggu2" placeholder="minggu" value="<?php echo $ajuan['minggu2'];?>">
        <input type="text" name="bulan2" id="bulan2" placeholder="bulan"  value="<?php echo $ajuan['bulan2'];?>">
  
        <input type="text" name="status2" id="status2" placeholder="status"  value="<?php echo $ajuan['status2'];?>">

        <input type="date" name="tanggal_mulai2" id="tanggal_mulai2" placeholder="tanggal mulai"  value="<?php echo date('Y-m-d',strtotime($ajuan['tanggal_mulai2']));?>">
        <input type="date" name="tanggal_sampai2" id="tanggal_sampai2" placeholder="tanggal sampai"  value="<?php echo date('Y-m-d',strtotime($ajuan['tanggal_sampai2']));?>">
        <input type="date" name="tgl_pengajuan2" id="tgl_pengajuan2" placeholder="tanggal pengajuan"  value="<?php echo date('Y-m-d',strtotime($ajuan['tgl_pengajuan2']));?>">
        
        <button type="submit">Kirim</button>
    
    </form>



    <form action="" method="post">
        <input type="text">
    </form>
</body>
</html>