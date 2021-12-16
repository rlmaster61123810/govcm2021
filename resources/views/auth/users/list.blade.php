
<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ผู้ดูแลระบบ ฐานข้อมูลลำไยนอกฤดู</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="core/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="core/css/adminlte.min.css">
  <link rel="stylesheet" href="core/css/stye.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">    <!-- DataTables -->
    <link rel="stylesheet" href="core/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="core/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="token">

    </div>
    <div class="wrapper">
         <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a href="index.php" class="nav-link"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a href="logout.php" class="nav-link" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่?')"><i class="fas fa-sign-out-alt"></i> logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->          <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
       <img src="images/db.png" alt="DBLogo" class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light ml-2">Admin Panel</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
          <img src="images/usericon.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info text-white">
         longan_lumphun        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		      <li class="nav-item">
            <a href="showplace.php" class="nav-link">
              <i class="far fa-circle"></i>
              <p>
                ข้อมูลสถานที่
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showpersonal.php" class="nav-link">
              <i class="far fa-circle"></i>
              <p>
                ข้อมูลปราชญ์ผู้ให้ข้อมูล
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showprovince.php" class="nav-link">
              <i class="far fa-circle"></i>
              <p>
                ข้อมูลจังหวัด
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showdistrict.php" class="nav-link">
              <i class="far fa-circle"></i>
              <p>
                ข้อมูลอำเภอ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showsubdistrict.php" class="nav-link">
              <i class="far fa-circle"></i>
              <p>
                ข้อมูลตำบล
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showvillage.php" class="nav-link">
              <i class="far fa-circle"></i>
              <p>
                ข้อมูลหมู่บ้าน
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showprename.php" class="nav-link">
              <i class="far fa-circle"></i>
              <p>
                คำนำหน้าชื่อ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showmanage.php" class="nav-link">
              <i class="far fa-circle"></i>
              <p>
                ข้อมูลผู้ใช้งาน
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"> <a href="showmanage.php">ผู้ใช้งานทั้งหมด</a>
                                </li>
                                <li class="breadcrumb-item active">จัดการผู้ใช้งาน</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="loading hide">
                    <div class="loading-content">
                        <i class="loading-add fa fa-spinner fa-spin"></i> Loading...
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        ผู้ใช้งาน
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div id="clear"></div>
                                    <div id="showsData">
                                        <a href="addmanage.php"><button type="button" class="addBtn btn btn-warning mb-2"
                                                data-toggle="modal"><i class="fas fa-plus"></i>
                                                เพิ่มผู้ใช้งาน</button></a>
                                        <table id="datatable" class="table table-bordered table-striped" width="100%">
                                            <thead>
                                                <tr>
                                                  <th width="5%" class="text-center">ที่</th>
                                                  <th scope="col">ชื่อ</th>
                                                  <th scope="col">user</th>
                                                  <th scope="col">สถานะ</th>
                                                  <th scope="col">สิทธิ์ในการเห็นข้อมูล</th>
                                                  <th scope="col">ใช้งานล่าสุด</th>
                                                  <th scope="col">จัดการ</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
    <strong>Copyright &copy; 2020</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
  	<!-- jQuery -->
	<script src="core/js/jquery.min.js"></script>
	<script src="core/js/adminlte.js"></script>
	<script src="core/js/bootstrap.bundle.min.js"></script>
  <script src="../core/lib/sweetalert2.all.min.js"></script>
    </div>
    <script src="core/js/sweetalert2.all.min.js"></script>
    <script src="core/js/jquery.dataTables.min.js"></script>
    <script src="core/js/dataTables.bootstrap4.min.js"></script>
    <script src="core/js/dataTables.responsive.min.js"></script>
    <!-- page script -->
    <script>
        $(document).ready(function() {
            var dataTable = $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "scrollX": true,
                "stateSave": true,
                "ajax": {
                    url: "datamanage.php",
                    type: "POST"
                },
                columnDefs: [{
                    orderable: false,
                    targets: '_all'
                }]
            });
            dataTable.on('draw.dt', function() {
                var info = dataTable.page.info();
                dataTable.column(0).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1 + info.start;
                });
            });
            //////////////////////////////ลบข้อมูล////////////
            $(document).on('click', '.del', function() {
                var idr = $(this).attr('data-id');
                var ecode = $(this).attr('data-ecode');
                var token = "JDJ5JDEwJFBMVXNIRmNFN2s0VlB3V0Q1am12YmVENWFiUmswNWdWem9qSVJlUTBRYklvYklva2lZWWtP";
                Swal.fire({
                    title: 'คุณต้องการลบข้อมูลที่เลือกใช่หรือไม่?',
                    showCancelButton: true,
                    confirmButtonText: `OK`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        // ส่งค่า
                        $.ajax({
                            url: 'processmanage.php?module=del',
                            type: "POST",
                            dataType: "json",
                            data: {
                                id: idr,
                                code: ecode,
                                _token: token
                            },
                        }).done(function(res) {
                            //res = JSON.parse(res);
                            if (res['status']) // ถ้าสำเร็จ
                            {
                                Swal.fire({
                                    title: 'ลบข้อมูลสำเร็จ',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(function() {
                                    location.reload();
                                })
                            } else {
                                Swal.fire({
                                    title: 'Error! ลบข้อมูลไม่สำเร็จ',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                }).then(function() {
                                    location.reload();
                                })
                            }
                        }).fail(function() {
                            Swal.fire({
                                title: 'Fail! มีบางอย่างผิดพลาด',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            }).then(function() {
                                location.reload();
                            })
                        });
                    } else {
                        location.reload();
                    }
                })
            });
        });
    </script>
</body>

</html>
