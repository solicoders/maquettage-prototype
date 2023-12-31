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
                                <h1>Authorization</h1>
                            </div>
                            <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="./create.php" class="btn btn-secondary bg-gray">
                                    <i class="fas fa-plus"></i> Ajoute automatique
                                </a>
                            </div>
                            <div class="float-sm-right mr-2">
                                <a href="./create.php" class="btn btn-secondary">
                                    <i class="fas fa-plus"></i> Ajoute
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
                            <div class="card">
                                <div class="card-header">
                                    <!-- <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Manage Authorizations
                                    </h3> -->
                                    <div class=" p-0">
                                        <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="Recherche">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="roleSelect">Role</label>
                                                <select class="form-control" id="roleSelect">
                                                    <option>Role 1</option>
                                                    <option>Role 2</option>
                                                    <!-- Add more roles as needed -->
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="controllerSelect">Controller</label>
                                                <select class="form-control" id="controllerSelect">
                                                    <option>Controller 1</option>
                                                    <option>Controller 2</option>
                                                    <!-- Add more controllers as needed -->
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="searchInput">Search</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="searchInput" placeholder="Search">
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
                                                <th>Rights</th>
                                                <th>Actions</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Role 1</td>
                                                <td>Controller 1</td>
                                                <td>All</td>
                                                <td>
                                                    <ul>
                                                        <li>Read</li>
                                                        <li>Write</li>
                                                        <li>Delete</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <a href="edit.php" class="btn btn-sm btn-default"><i class="fas fa-edit"></i></a>
                                                    <button  class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>

                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
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