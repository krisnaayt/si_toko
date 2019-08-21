<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body id="page-top">
    
<?php $this->load->view('admin/_partials/navbar.php') ?>
  
  <div id="wrapper">
    
    <?php $this->load->view('admin/_partials/sidebar.php') ?> 
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php $this->load->view('admin/_partials/breadcrumb.php') ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php foreach($product as $data_product): ?>
                  <tr>
                    <td><?php echo $data_product->name ?></td>
                    <td><?php echo $data_product->price ?></td>
                    <td><img src="<?php base_url('upload/product/'.$data_product->image) ?>" width="64" /></td>
                    <td class="small"><?php echo substr($data_product->description,0,120) ?>...</td>
                    <td width="250">
                        <a href="<?php echo site_url('admin/product/edit/'.$data_product->product_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
                        <a href="<?php echo site_url('admin/product/delete/'.$data_product->product_id) ?>" class="btn btn-small text-danger"> <i class="fas fa-trash"></i>Hapus</a>
                        <!--
                        <a onclick="deleteConfirm(<?php //echo site_url('admin/product/delete/'.$data_product->product_id) ?>)" href="#!" class="btn btn-small text-danger"> <i class="fas fa-trash"></i>Hapus</a>
                        -->
                    </td>
                </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <?php $this->load->view('admin/_partials/footer.php') ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view('admin/_partials/scrolltop.php') ?>
  <?php $this->load->view('admin/_partials/modal.php') ?>
  <?php $this->load->view('admin/_partials/js.php') ?>

</body>

</html>
