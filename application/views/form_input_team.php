 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM INPUT PEMESANAN TEAM</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">TEAM</a></li>
              <li class="breadcrumb-item active">INPUT</li>
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
         <form action="<?= base_url('Team/simpan_data')?>" method="post">   
                <div class="card-body">
                  <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                           <script>alert('berhasil memasukan data')</script>
                  <?php
                       };
                  ?>   
                    <label for="">Waktu Pemesanan Tim</label>
                    <input required type="time" class="form-control" name="waktu">
                    <label for="">Nama Tim</label>
                    <input  required type="text" class="form-control" name="nama_tim">
                    <label for="">Jumlah Pemain </label>
                    <input  required type="text" class="form-control" name="jumlah_pemain"> 
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
        </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 