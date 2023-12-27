<!DOCTYPE html>
<html lang="en">

<!-- get heade -->
<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- nav -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- aside -->
        <?php include_once "../layouts/aside.php" ?>




        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">

            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Ajouter Tache</h3>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom </label>
                                            <input name="nom" type="text" class="form-control"
                                                id="exampleInputEmail1" placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <input name="description" type="password" class="form-control"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">date debut</label>
                                            <input name="startDate" type="date" class="form-control"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">date fin</label>
                                            <input name="endtDate" type="date" class="form-control"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <a href="./index.html" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>


       <!-- get footer -->
       <?php include_once "../layouts/footer.php" ?>

    </div>

    <!-- get script -->
    <?php include_once "../layouts/footer.php" ?>
</body>

</html>