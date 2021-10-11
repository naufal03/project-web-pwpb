<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('admin/img/logo/logo.jpg') }}">
    </div>
    <div class="sidebar-brand-text mx-2">Hayang Dagang</div>
  </a>
  <br>
  <div class="sidebar-heading">
    Menu
  </div>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
      aria-controls="collapseForm">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Category</span>
    </a>
    <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="nav-link" class="collapse-item" href="#">Foods & Drinks</a>
        <a class="nav-link" class="collapse-item" href="#">Others</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-target="#collapseTable" aria-expanded="true"
      aria-controls="collapseTable">
      <i class="fas fa-fw fa-table"></i>
      <span>About</span>
    </a>
  </li>
</ul>
