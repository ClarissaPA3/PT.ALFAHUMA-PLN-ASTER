<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master POS </title>
</head>
<body>
    <a href="<?php echo site_url('C_masterpos_subpos/add_pos');?>">Tambah POS</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama POS</th>
            <th>Aksi</th>
        </tr>
        <?php 
        $id = 0;
        foreach ($pos as $nama) :
            $id++;
            
        
         ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $nama['nama_pos'] ?></td>
            <td>
            
                <a href="<?php echo site_url('C_masterpos_subpos/update_pos/'). $nama['id_pos']; ?>">Edit</a>
                <a href="<?php echo site_url('C_masterpos_subpos/delete_pos/'). $nama['id_pos']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>