<!-- Sidebar -->
<ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2)==''?'active':'' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/overview')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Overview</span>
        </a>
      </li>
      <li class="nav-item dropdown <?php echo $this->uri->segment(2)=='product'?'active':'' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Product</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo site_url('admin/product/add') ?>">New Product</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/product') ?>">List Product</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Users</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Setting</span></a>
      </li>
    </ul>