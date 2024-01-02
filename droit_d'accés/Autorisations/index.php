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
                            <h1>Autorisation</h1>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right mr-2">
                                <a href="./create.php" class="btn btn-secondary">
                                    <i class="fas fa-plus"></i> Ajoute
                                </a>
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
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Manage Authorizations
                                    </h3>
                                    <div class=" p-0">
                                        <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Recherche">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="roleSelect">Role</label>
                                                <select class="form-control" id="roleSelect">
                                                    <option>admin</option>
                                                    <option>chef-projet</option>
                                                    <option>utilisateur</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="controllerSelect">Controller</label>
                                                <select class="form-control" id="controllerSelect">
                                                    <option>ProjectsController</option>
                                                    <option>TasksController</option>
                                                    <option>UtilisteurController</option>
                                                    <!-- Add more controllers as needed -->
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="searchInput">Recherche</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="searchInput" placeholder="Recherche">
                                                    <span class="input-group-append">
                                                        <button class="btn btn-default" type="button">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Role</th>
                                                <th>Controller</th>
                                                <th>Tousles droit</th>
                                                <th>Actions</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>admin</td>
                                                <td>
                                                  ProjectsController
                                                </td>
                                                </td>
                                                <td>All</td>
                                                <td>
                                                    <ul>
                                                        <li>index-projetsController</li>
                                                        <li>create-projetsController</li>
                                                        <li>edit-projetsController</li>
                                                        <li>Delete-projetsController</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <a href="edit.php" class="btn btn-sm btn-default"><i class="fas fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>utilisateur</td>
                                                <td>
                                                <ul>
                                                    ProjectsController
                                                    </ul>
                                                </td>
                                                <td>All</td>
                                                <td>
                                                    <ul>
                                                        <li>index</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <a href="edit.php" class="btn btn-sm btn-default"><i class="fas fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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