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
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Ajouter une autorisation
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
                                            <select multiple class="form-control select2" name="controllerSelect[]" id="controllerSelect" data-placeholder="Select Controller" style="width: 100%;">
                                                <option value="add">Projets</option>
                                                <option value="edit">Tâches</option>
                                                <option value="delete">Utilisateur</option>
                                            </select>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox2">
                                            <label for="customCheckbox2" class="custom-control-label">Sélectionnez tous les droits</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="actionSelect1">Actions</label>
                                            <select multiple class="form-control select2" name="actionSelect[]" id="actionSelect1" data-placeholder="Select actions" style="width: 100%;">
                                                <option value="add">Add</option>
                                                <option value="edit">Edit</option>
                                                <option value="delete">Delete</option>
                                                <option value="create">Create</option>
                                                <!-- Add more actions as needed -->
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div><!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

            <!-- Inclure le pied de page -->
            <?php include_once "../../layouts/footer.php" ?>
        </div>
        <!-- /.content-wrapper -->

        <!-- Inclure le script -->
        <?php include_once "../../layouts/script-link.php" ?>

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">

        <!-- Select2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                // Initialize select2
                $('#controllerSelect').select2();
                $('#actionSelect1').select2();
            });
        </script>
    </body>
</html>
