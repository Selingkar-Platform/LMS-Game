<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Selingkar <sup>Admin</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-shopping-cart"></i>
        <span>Product</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Costum Product:</h6>
            <a class="collapse-item" href="<?php echo e(route('product')); ?>">Product</a>
            <?php if(auth()->user()->level == 'Admin'): ?>
            <a class="collapse-item" href="<?php echo e(route('kategori')); ?>">Kategori</a>
            <?php endif; ?>
            <a class="collapse-item" href="utilities-animation.html">Games</a>
        </div>
    </div>
  </li>

  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCostumer"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Costumer</span>
    </a>
    <div id="collapseCostumer" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Task:</h6>
            <a class="collapse-item" href="#">Folder</a>
            <a class="collapse-item" href="#">Task</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="#">Calendar</a>
        </div>
    </div>
  </li>
  
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-users"></i>
        <span>Karyawan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Karyawan:</h6>
            <a class="collapse-item" href="#">Tim</a>
            <a class="collapse-item" href="#">Karyawan</a>
            <a class="collapse-item" href="#">Jabatan</a>
        </div>
    </div>
  </li>

  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Work Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Task:</h6>
            <a class="collapse-item" href="#">Folder</a>
            <a class="collapse-item" href="#">Task</a>
        </div>
    </div>
  </li>

  
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-calendar-day"></i>
      <span>Calendar</span></a>
    </li>

  
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-user-alt"></i>
      <span>User</span></a>
  </li



  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<?php /**PATH D:\Project Magang\laravel10\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>