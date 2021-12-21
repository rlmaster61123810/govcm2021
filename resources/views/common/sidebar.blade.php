<ul class="navbar-nav bg-gradient-primary
sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-network-wired"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Login</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ผู้ใช้งาน
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapseOne" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseOne">
            <i class="fas fa-fw fa-user"></i>
            <span>ข้อมูลผู้ใช้งาน</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">จัดการข้อมูลผู้ใช้งาน</h6>
                <a class="collapse-item" href="{{ route('users.index') }}">รายการผู้ใช้งาน</a>
                <a class="collapse-item" href="{{ route('users.create') }}">เพิ่มผู้ใช้งาน</a>
            </div>
        </div>
    </li>

 <!-- Divider -->
 <hr class="sidebar-divider">

 <!-- Heading -->
 <div class="sidebar-heading">
    ชุมชน
 </div>

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
     <a class="nav-link collapsePagesTwo" href="#" data-toggle="collapse" data-target="#collapsePagesTwo" aria-expanded="true"
         aria-controls="collapsePagesTwo">
         <i class="fas fa-fw fa-folder"></i>
         <span>ข้อมูลชุมชน</span>
     </a>
     <div id="collapsePagesTwo" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">จัดการข้อมูลชุมชน</h6>
            <a class="collapse-item" href="{{ route('communitys.index') }}">รายการผู้ใช้งาน</a>
            <a class="collapse-item" href="#">เพิ่มชุมชน</a>
            <a class="collapse-item" href="#">รายการสมาชิกชุมชน</a>
            <a class="collapse-item" href="#">เพิ่มสมาชิกชุมชน</a>
            <a class="collapse-item" href="#">รายการหัวหน้าชุมชน</a>
            <a class="collapse-item" href="#">เพิ่มหัวหน้าชุมชน</a>
         </div>
     </div>
 </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        พื้นที่ขายสินค้า
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsePagesThree" href="#" data-toggle="collapse" data-target="#collapsePagesThree" aria-expanded="true"
            aria-controls="collapsePagesThree">
            <i class="fas fa-fw fa-folder"></i>
            <span>ข้อมูลพื้นที่ขายสินค้า</span>
        </a>
        <div id="collapsePagesThree" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">จัดการพื้นที่ขายสินค้า</h6>
                <a class="collapse-item" href="login.html">รายการพื้นที่ขายสินค้า</a>
                <a class="collapse-item" href="register.html">เพิ่มพื้นที่ขายสินค้า</a>
                <a class="collapse-item" href="login.html">รายการสินค้า</a>
                <a class="collapse-item" href="register.html">เพิ่มรายการสินค้า</a>
            </div>
        </div>
    </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            การเข้าร่วมอบรม
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsePagesFour" href="#" data-toggle="collapse" data-target="#collapsePagesFour" aria-expanded="true"
                aria-controls="collapsePagesFour">
                <i class="fas fa-fw fa-folder"></i>
                <span>ข้อมูลโครงการอบรม</span>
            </a>
            <div id="collapsePagesFour" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">จัดการข้อมูลโครงการอบรม</h6>
                    <a class="collapse-item" href="login.html">รายการโครงการ</a>
                    <a class="collapse-item" href="register.html">เพิ่มโครงการ</a>
                </div>
            </div>
        </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
