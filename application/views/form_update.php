

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM INPUT PEMESANAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PEMESANAN</a></li>
              <li class="breadcrumb-item active">UPDATE</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      <div class="card">
      <div class="card-header">
            PEMESANAN
        </div>
        <form action="<?= base_url('pemesanan/update_data')?>" method="post">
            <div class="card-body">
              <?php
                  $message =$this->session->flashdata('message');

                  if($message == "success"){
                    ?>
                    <script>alert('berhasil mengubah data')</script>
                  <?php
                  };
                  foreach($data as $j) :
              ?>
                <label for="">ID Transaksi</label>
                <input value="<?= $j->id?>"required type="text" class="form-control" name="id">
                <label for="">Nama Lapangan</label>
                <input value="<?= $j->nama_lapangan?>"required type="text" class="form-control" name="nama_lapangan">
                <label for="">Lebar Lapangan</label>
                <input value="<?= $j->lebar_lapangan?>"required type="text" class="form-control" name="lebar_lapangan">
                <label for="">Bola</label>
                <input value="<?= $j->bola?>"required type="text" class="form-control" name="bola">
                <label for="">Jenis Rumput</label>
                <select class="form-control" name="jenis_rumput" id="">
                    <option value="">Pilih Jenis Rumput</option>
                    <option value="Asli">Rumput Asli</option>
                    <option value="Sintetis">Rumput Sintetis</option>
                 </select>
                <label for="">Tanggal pemesanan</label>
                <input value="<?= $j->tanggal_pemesanan?>"required type="DATE" class="form-control" name="tanggal_pemesanan">
                <label for="">Jam pemesanan</label>
                <input value="<?= $j->jam_pemesanan?>"required type="TIME" class="form-control" name="jam_pemesanan">
            </div>
            <?php
                endforeach
            ?>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" >UPDATE</button>
            </div>
    </form> 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 