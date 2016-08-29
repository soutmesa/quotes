<?php
  include('../functions/session_login.php');
  include('../includes/header.php');
  include('../includes/aside_left.php');
?>
<style>
  .datepicker{
    z-index:15000 !important;
  }
  #edit, #delete {
    cursor: pointer;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>User Lists</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      <br />
      <span class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add User</span>
    </section>
    <!-- Main content -->
    <section class="content">
      <table class="table table-hover " id="mytable">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Type</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </section>
    <?php 
      include('form.php');
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include('../includes/footer.php');
?>
<script type="text/javascript" src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
<script type="text/javascript" src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $('.datepicker').datepicker({
      format: 'yyyy/mm/dd H:i:s',
      startDate: '-3d'
  });
</script>
