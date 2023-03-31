<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->

                <div class="card-tools">
                </div>
              </div>
              <div class="card-body">
                <!-- Logic PHP -->
                <?php
                    if (isset($_POST['submit'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        // Cek Email
                        if ($email == "") {
                            echo "<h3> Email Belum Diisi </h3>";
                        } else {
                            echo "Email anda : " . $email;
                            echo "<br> Password : " . $password;
                        }
                    }
                ?>
              </div>
            </div>
            <!-- /.card -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>