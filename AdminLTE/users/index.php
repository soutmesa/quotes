<?php
  include('../functions/session_login.php');
  include('../includes/header.php');
  include('../includes/aside_left.php');
?>
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
    </section>

    <!-- Main content -->
    <section class="content">
      <table class="table table-hover">
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
        <tbody>
          <tr>
            <th>1</th>
            <th>mesa</th>
            <th>M</th>
            <th>Admin</th>
            <th>093494818</th>
            <th>soutmesa3@gmail.com</th>
            <th>21/08/2016</th>
            <th>21/08/2016</th>
            <th><a href="">Edit</a> | <a href="">Delete</a></th>
          </tr>
          <tr>
            <th>2</th>
            <th>mesa</th>
            <th>M</th>
            <th>Admin</th>
            <th>093494818</th>
            <th>soutmesa3@gmail.com</th>
            <th>21/08/2016</th>
            <th>21/08/2016</th>
            <th><a href="">Edit</a> | <a href="">Delete</a></th>
          </tr>
          <tr>
            <th>3</th>
            <th>mesa</th>
            <th>M</th>
            <th>Admin</th>
            <th>093494818</th>
            <th>soutmesa3@gmail.com</th>
            <th>21/08/2016</th>
            <th>21/08/2016</th>
            <th><a href="">Edit</a> | <a href="">Delete</a></th>
          </tr>
          <tr>
            <th>4</th>
            <th>mesa</th>
            <th>M</th>
            <th>Admin</th>
            <th>093494818</th>
            <th>soutmesa3@gmail.com</th>
            <th>21/08/2016</th>
            <th>21/08/2016</th>
            <th><a href="">Edit</a> | <a href="">Delete</a></th>
          </tr>
        </tbody>
      </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include('../includes/footer.php');
?>
<script type="text/javascript" src="../js/app.js"></script>
