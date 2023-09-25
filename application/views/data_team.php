
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
        <selection class="content">
          <div class="container-fluid">
           <div class="card">
                <div class="card-header">
                  <h3>Data Pemesanan Tim</h3>
                  <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                      <script>alert('berhasil memasukan data')</script>
                  <?php
                       }
                       else if($message == "success update")
                       {
                       ?>
                       <script>alert('berhasil merubah data')</script>
                       <?php
                       }else if($message == "success delete")
                       {
                        ?>
                      <script>alert('berhasil menghapus data')</script>
                      <?php
                       }
                       ?>

              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Waktu Pemesanan</th>
                      <th>Nama Tim</th>
                      <th>Jumlah Pemain</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $L = 1;
                      foreach($data as $c) :
                    ?>
                      <tr>
                        <td><?= $L ?></td>
                        <td><?= $c->waktu ?></td>
                        <td><?= $c->nama_tim ?></td>
                        <td><?= $c->jumlah_pemain?></td>
                        <td>
                            <a href="<?= base_url()?>team/update_team?id=<?= $c->id ?>" type="button" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i></a>
                            <a href="<?= base_url()?>team/delete_data?id=<?= $c->id ?>" type="button" class="btn btn-danger">
                            <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>                            
                    <?php
                      $L++;
                      endforeach;
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  