<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
                    เพิ่มผู้ใช้งาน
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- form start -->
                  <form name="add-data" id="add-data" method="post" action="processmanage.php?module=add">
                    <input type="hidden" class="form-control" name="_token" value="JDJ5JDEwJHVWZUVGVTNybGF2LjdCbFZVMnhRQk9nMGZoRk5Fdy9yUE1ObWlzMC9FbWVmN0ZNUkVVUVl5">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="mname">
                          <font color="#F10206">*</font> สถานะ
                        </label>
                        <select name="mtype" id="mtype" class="form-control">
                          <option value="">เลือกสถานะ</option>
                          <option value="1">Admin</option>
                          <option value="2">User</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="mname">
                          <font color="#F10206">*</font> ชื่อผู้ใช้งาน
                        </label>
                        <input type="text" class="form-control" id="mname" name="mname" placeholder="กรอกชื่อ" value="">
                      </div>
                      <div class="form-group">
                        <label for="user">
                          <font color="#F10206">*</font>username
                        </label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="กรอก user" value="">
                      </div>
                      <div class="form-group">
                        <label for="pass">
                          <font color="#F10206">*</font> password <font color="#F10206">ไม่น้อยกว่า 8 ตัว</font>
                        </label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="กรอก password">
                      </div>
                      <div class="form-group">
                        <label for="repass">
                          <font color="#F10206">*</font> ยืนยัน password
                        </label>
                        <input type="password" class="form-control" id="repass" name="repass" placeholder="กรอก password อีกครั้ง">
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" id="saveBtn"><i class="spin fa fa-spinner fa-spin hide"></i>
                        บันทึกข้อมูล</button>
                    </div>
                  </form>
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
</body>
</html>
