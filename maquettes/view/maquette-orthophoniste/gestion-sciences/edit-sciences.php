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

        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="nav-icon fas fa-table"></i></h3>
                                </div>
                                <!-- Obtenir le formulaire -->

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="card card-default">

                                           

                                            <div class="card-body p-0 mt-2">
                                               
                                                <div class="form-group col-12">
                                                    <label> Date de rendez-vous </label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" value="04/03/2023" />
                                                     
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">

                                                     
                                                </div>
                                            </div>
                                            <div class="d-flex">

                                                <div class="form-group col-md-12">
                                                    <label>L'état</label>
                                                    <div id="reservationdate" data-target-input="nearest">
                                                        <textarea name="etat" id="summernote" class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nemo modi quisquam iure voluptatum fugit quia facere atque, .</textarea>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                         

                                            <div class="d-flex">

                                                <div class="form-group col-md-12">
                                                    <label>Bilan</label>
                                                    <div id="reservationdate" data-target-input="nearest">
                                                        <textarea name="Diagnostic" id="summernote3" class="form-control" rows="4">Lorem ipsum dolor fugit totam, fuga esse sit reiciendis, maiores non tempore repudiandae! Susnt sequi, tempore quae!</textarea>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="form-group col-md-12">
                                                    <label>Remarque</label>
                                                    <div id="reservationdate" data-target-input="nearest">
                                                        <textarea name="Remarque" id="summernote5" class="form-control" rows="4">Lorem ipsum dolor, sit amet consectetur aorporis, aliquid sapiente numquam quaerat atque.</textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-4 mb-3">
                                                <a href="./sciences.php" class="btn btn-secondary">Retour</a>
                                                <a href="./sciences.php" class="btn btn-info">Modifier</a>
                                            </div>
                                            </form>
                                           
                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                    <!-- /.card -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        </section>

    </div>
    </div>
    <style>
        .md-stepper-horizontal {
            display: table;
            width: 100%;
            margin: 0 auto;
            background-color: #FFFFFF;
            box-shadow: 0 3px 8px -6px rgba(0, 0, 0, .50);
        }

        .md-stepper-horizontal .md-step {
            display: table-cell;
            position: relative;
            padding: 24px;
        }

        .md-stepper-horizontal .md-step:hover,
        .md-stepper-horizontal .md-step:active {
            background-color: rgba(0, 0, 0, 0.04);
        }

        .md-stepper-horizontal .md-step:active {
            border-radius: 15% / 75%;
        }

        .md-stepper-horizontal .md-step:first-child:active {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .md-stepper-horizontal .md-step:last-child:active {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .md-stepper-horizontal .md-step:hover .md-step-circle {
            background-color: #757575;
        }

        .md-stepper-horizontal .md-step:first-child .md-step-bar-left,
        .md-stepper-horizontal .md-step:last-child .md-step-bar-right {
            display: none;
        }

        .md-stepper-horizontal .md-step .md-step-circle {
            width: 30px;
            height: 30px;
            margin: 0 auto;
            background-color: #999999;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-size: 16px;
            font-weight: 600;
            color: #FFFFFF;
        }


        /* .md-stepper-horizontal .md-step.done .md-step-circle:before {

        font-weight: 100;
        content: "\f00c";
    } */

        .md-stepper-horizontal .md-step.done .md-step-circle *,
        .md-stepper-horizontal .md-step.editable .md-step-circle * {
            display: block;
        }

        .md-stepper-horizontal .md-step.editable .md-step-circle {
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        .md-stepper-horizontal .md-step.editable .md-step-circle:before {
            /* font-family:'FontAwesome'; */
            font-weight: 100;
            content: "\f040";
        }

        .md-stepper-horizontal .md-step .md-step-title {
            margin-top: 16px;
            font-size: 16px;
            font-weight: 600;
        }

        .md-stepper-horizontal .md-step .md-step-title,
        .md-stepper-horizontal .md-step .md-step-optional {
            text-align: center;
            color: rgba(0, 0, 0, .26);
        }

        .md-stepper-horizontal .md-step.active .md-step-title {
            font-weight: 600;
            color: rgba(0, 0, 0, .87);
        }

        .md-stepper-horizontal .md-step.active.done .md-step-title,
        .md-stepper-horizontal .md-step.active.editable .md-step-title {
            font-weight: 600;
        }

        .md-stepper-horizontal .md-step .md-step-optional {
            font-size: 12px;
        }

        .md-stepper-horizontal .md-step.active .md-step-optional {
            color: rgba(0, 0, 0, .54);
        }

        .md-stepper-horizontal .md-step .md-step-bar-left,
        .md-stepper-horizontal .md-step .md-step-bar-right {
            position: absolute;
            top: 36px;
            height: 1px;
            border-top: 1px solid #DDDDDD;
        }

        .md-stepper-horizontal .md-step .md-step-bar-right {
            right: 0;
            left: 50%;
            margin-left: 20px;
        }

        .md-stepper-horizontal .md-step .md-step-bar-left {
            left: 0;
            right: 50%;
            margin-right: 20px;
        }
    </style>


    <!-- Inclure le pied de page -->
    <?php include_once "../../layouts/footer.php" ?>

    </div>

    <!-- Inclure le script -->
    <?php include_once "../../layouts/script-link.php" ?>
</body>

</html>
