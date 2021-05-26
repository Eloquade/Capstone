<?php include "../config/database.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Blank Page</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php include("shared/head.php"); ?>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-purple sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

<?php include("shared/header.php"); ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->

  <?php include("shared/sidebar.php"); ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box divhide">
        <div class="box-header with-border">
          <h3 class="box-title">Residents</h3>
          <div class="box-title"><a href="residentform.php" class="btn bg-purple btn-flat btn-sm"></i> New Resident</a></div>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>

          </div>
        </div>

        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover table-striped table-responsive">
                <thead>
                <tr class="bg-purple">
                  <th>Resident ID No.</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Birth Date</th>
                  <th>Street</th>
                  <th>Barangay</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $sql = "SELECT
                          barangay.barangay_id,
                          barangay.barangay_name,
                          person.person_id,
                          person.person_code_id,
                          person.first_name,
                          person.middle_name,
                          person.last_name,
                          person.gender,
                          person.birthday,
                          person.barangay_id,
                          person.street
                          FROM
                          person
                          INNER JOIN barangay ON person.barangay_id = barangay.barangay_id";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                  $p_id=$row["person_id"];
                  $id=$row["person_code_id"];
                  $fullname=$row["first_name"]." ".$row["last_name"];
                  $birthday     = date("M. d, Y", strtotime($row["birthday"]));
                  ?>
                <tr>
                  <td><?php echo $id; ?></td>
                  <td><?php echo $fullname; ?></td>
                  <td><?php echo $row["gender"]; ?></td>
                  <td><?php echo $birthday; ?></td>
                  <td><?php echo $row["street"];?></td>
                  <td><?php echo $row["barangay_name"]; ?></td>
                  <td><div class="btn-group">
                      <a href="residentformedit.php?person_id=<?php echo $p_id ?>" class="btn bg-olive btn-flat btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <button onclick="deletealert()" class="btn bg-maroon btn-flat btn-sm"><i class="fa fa-trash"></i> Delete</button>
                      <a href="pdfid/brgyidentification.php?id=<?php echo $id ?>" class="btn bg-orange btn-flat btn-sm" target="_Blank"><i class="fa fa-print"></i> Generate ID</a>
                    </div></td>
                </tr>
              <?php }} ?>
                </tbody>
              </table>

        </div>
        <!-- /.box-body -->
         
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!--include footer  here-->

  <!-- Control Sidebar -->
  <?php include("shared/control_sidebar.php"); ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include("shared/script.php"); ?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<!--Sweet alert-->
<script>
    <?php
        if($_GET["msg"] == "success") {?>
          Swal.fire('Saved Successfully', '', 'success');
    <?php } ?>
</script>
<script>
    <?php
        if($_GET["msg"] == "remove") {?>
          Swal.fire('Deleted Successfully', '', 'success');
    <?php } ?>
</script>
<script>
    <?php
        if($_GET["msg"] == "update") {?>
          Swal.fire('update Successfully', '', 'success');
    <?php } ?>
</script>

<script>
function deletealert() {
  Swal.fire({
  title: 'Are you sure?',
  text: 'You will not be able to recover this data!',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, keep it'
}).then((result) => {
  if (result.value) {
    window.location.assign("action/residentcrud.php?person_id=<?php echo $p_id ?>");
  // For more information about handling dismissals please visit
  // https://sweetalert2.github.io/#handling-dismissals
  } else if (result.dismiss === Swal.DismissReason.cancel) {
    Swal.fire(
      'Cancelled',
      'Your data is keeped :)',
      'error'
    )
  }
})
}
</script>
 
</body>
</html>
