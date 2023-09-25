 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM UPDATE PEMESANAN TEAM</h1>
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
                PEMESANAN TEAM
         </div>
         <form action="<?= base_url('Team/update_data')?>" method="post">   
                <div class="card-body">
                  <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                           <script>alert('berhasil mengubah data')</script>
                  <?php
                       };
                        foreach ($data as  $c) :
                  ?>  
                    <label for="">ID Transaksi</label>
                    <input readonly value="<?= $c->id?>" required type="text" class="form-control" name="id"> 
                    <label for="">Waktu Pemesanan</label>
                    <input value="<?= $c->waktu?>" required type="time" class="form-control" name="waktu">
                    <label for="">Nama Tim</label>
                    <input value="<?= $c->nama_tim?>" required type="text" class="form-control" name="nama_tim">
                    <label for="">Jumlah Pemain</label>
                    <input value="<?= $c->jumlah_pemain?>" required type="text" class="form-control" name="jumlah_pemain">
                </div>
                <?php
                        endforeach;
                ?>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 