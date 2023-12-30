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
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Actions</h1>
              </div>
              <div class="col-sm-6">
                <div class="float-sm-right">
                  <a href="./create.php" class="btn btn-secondary">
                    <i class="fas fa-plus"></i> Ajoute Role
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->

                <table class="table table-striped text-nowrap">
                  <thead>
                    <tr>
                      <th>Nom de rôle</th>
                      <th class="action-column" style="width: 150px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Admin</td>
                      <td>
                        <a href="edit.php" class="btn btn-sm btn-default"><i class="fas fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>Chef de projet</td>
                      <td>
                        <a href="edit.php" class="btn btn-sm btn-default"><i class="fas fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <!-- Add more rows for other roles -->
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2">
                        <ul class="pagination  m-0 float-right">
                          <li class="page-item"><a class="page-link" href="#">«</a></li>
                          <li class="page-item"><a class="page-link active" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                      </td>
                    </tr>
                  </tfoot>
                </table>
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