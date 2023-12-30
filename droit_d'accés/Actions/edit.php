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
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Actions</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>                  
                    <tr>
                      <th>Nom d'action</th>
                      <th class="action-column" style="width: 150px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ajouter projet</td>
                      <td class="text-right action-column" style="width: 150px;">
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
                        <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Supprimer tache</td>
                      <td class="text-right action-column" style="width: 150px;">
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
                        <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> </button>
                      </td>
                    </tr>
                    <!-- Add more rows for other actions -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
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