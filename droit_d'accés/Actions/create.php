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
            <h1>Actions</h1>
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">
                              <i class="fas fa-chart-pie mr-1"></i>
                              Add New Action
                            </h3>
                          </div><!-- /.card-header -->
                          <div class="card-body">
                            <form>
                              <div class="form-group">
                                <label for="rActionName">Action Name</label>
                                <input type="text" class="form-control" id="rActionName" placeholder="Enter Action name">
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
  </div>
  <!-- /.content-wrapper -->

    <!-- Inclure le pied de page -->
    <?php include_once "../../layouts/footer.php" ?>

  </div>

  <!-- Inclure le script -->
  <?php include_once "../../layouts/script-link.php" ?>
</body>

</html>