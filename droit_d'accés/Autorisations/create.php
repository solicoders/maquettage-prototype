<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../../layouts/aside.php" ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Controllers</h1>
          </div>
          <div class="col-sm-6">
            <div class="float-right">
              <!-- <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">Search</button>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
 <!-- Main content -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-pie mr-1"></i>
              Add Authorization
            </h3>
          </div><!-- /.card-header -->
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="roleSelect">Role</label>
                <select class="form-control" id="roleSelect">
                  <option>admin</option>
                  <option>chef projet</option>
                  <!-- Add more roles as needed -->
                </select>
              </div>
              <div class="form-group">
                <label for="controllerSelect">Controller</label>
                <select class="form-control" id="controllerSelect">
                  <option>gestion projet</option>
                  <option>gestion tache</option>
                  <!-- Add more controllers as needed -->
                </select>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                <label for="customCheckbox2" class="custom-control-label">Select all rights</label>
              </div>
              <div class="form-group">
                <label for="rightsSelect">Rights</label>
             
                <select multiple class="form-control" id="rightsSelect">
                  <option>Read projet</option>
                  <option>Write projet</option>
                  <option>Delete projet</option>
                  <!-- Add more rights as needed -->
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
<!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

        <!-- Inclure le pied de page -->
        <?php include_once "../../layouts/footer.php" ?>

    </div>

    <!-- Inclure le script -->
    <?php include_once "../../layouts/script-link.php" ?>
</body>

</html>