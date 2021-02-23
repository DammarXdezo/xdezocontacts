<?php require('inc/toppart.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php require('inc/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
  
              <div class="card">
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">Manage Contacts</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body bg-secondary">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>Action</th>
                      <th>Name</th>
                      <th>Contact No.</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Company</th>
                      <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_contacts";
                    $result = mysqli_query($conn,$query);
                    $i=0;
                    while($data = mysqli_fetch_array($result))
                    {
                      ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td>
                        <a href="viewcontact.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-info float-left">View</button></a> 
                        <a href="editcontact.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-primary float-left">Edit</button></a> 
                        <a href="process/deletedcontact.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Delete</button></a> 
                      </td>
                      <td><?php echo $data['name']; ?></td>
                      <td><?php echo $data['contact']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['address']; ?></td>
                      <td><?php echo $data['company']; ?></td>
                      <td><?php echo $data['notes']; ?></td>
                    </tr>
                      <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S.N.</th>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Contact No.</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Company</th>
                            <th>Notes</th>
                          </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    </section>
    <!-- /.content -->
  </div>
  
  <?php require('inc/footer.php'); ?>