

<!DOCTYPE html>
<html>
<head>

  <?php $this->load->view("dashboard/_part/head"); ?>

  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Cetak Data Filter</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    if ($this->session->userdata('id_jabatan') == 1) {
      $this->load->view('dashboard/sidebarnav/_headsubbidang');
    } else if ($this->session->userdata('id_jabatan') == 2) {
      $this->load->view('dashboard/sidebarnav/_headdm');
    } else if ($this->session->userdata('id_jabatan') == 3) {
      $this->load->view('dashboard/sidebarnav/_headdmpau');
    }

    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

<body>
 <div class="container">
  <br>
  <h1 align="center"><?php echo $title ?? '-' ?></h1>
  <br>
  <div class="row">
   <div class="col-md-3">
    <form action="" id="FormLaporan">
     <select name="" id="filterb" class="form-control">
      <option value="0">Show All</option>
      <?php foreach ($filterb as $row): ?>
       <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
      <?php endforeach ?>
     </select>
     <br>
     <button type="submit" class="btn btn-primary">Show Data</button>
    </form>
   </div>
   <div class="col-md-9">
    <div id="result"></div>
   </div>
  </div>
 </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
  $(document).ready(function() {
   $("#FormLaporan").submit(function(e) {
    e.preventDefault();
    var id = $("#filterb").val();
    // console.log(id);
    var url = "<?= site_url('Cetak_Filter/filter/') ?>" + id;
    $('#result').load(url);
   })
  });
 </script>
</body>



</html>
    