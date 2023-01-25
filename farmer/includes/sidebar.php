 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">FARMER</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
                <a class="nav-link" href="announcement.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>View Announcement</span></a>
    </li>

    <li class="nav-item">
                <a class="nav-link" href="product.php">
                    <i class="fas fa-fw fa-box"></i>
                    <span>View Product</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#account"
            aria-expanded="true" aria-controls="account">
            <i class="fas fa-poll-h"></i>
            <span>Request</span>
        </a>
        <div id="account" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage:</h6>
                <a class="collapse-item" href="request_view.php">View</a>
                <a class="collapse-item" href="request.php">Add</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
                <a class="nav-link" href="report.php">
                    <i class="fas fa-fw fa-envelope-open-text"></i>
                    <span>Report</span></a>
    </li>

    <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Concern</span></a>
    </li>

    <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-qrcode"></i>
                    <span>Generate QR Code</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->