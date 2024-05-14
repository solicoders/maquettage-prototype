<?php
$current_route = $_SERVER['REQUEST_URI'];
?>

<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">
    <!-- Logo de la marque -->
    <a href="/view/home.php" class="brand-link">
        <img src="/view/assets/images/logo.png" class="brand-image img-circle elevation-3" alt="Image de groupe">
        <span class="brand-text font-weight-light text-center h6">Gestion des Projets</span>
    </a>

    <!-- Barre latérale -->
    <div class="sidebar">
        <!-- Menu latéral -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/view/home.php"
                        class="nav-link <?php echo (strpos($current_route, 'home') !== false) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Accueil
                        </p>
                    </a>
                </li>
            
                <!-- orthoptiste -->
                <li class="nav-item has-treeview">
                    <a href="#"
                        class="nav-link <?php echo (strpos($current_route, 'Orthophoniste') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-user-doctor"></i>
                        <p>
                         Orthophoniste
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="/view/maquette-orthophoniste/gestion-consultations/index.php"
                                class="nav-link <?php echo (strpos($current_route, 'index') !== false) ? 'active' : ''; ?>">
                                <i class="fa-regular fa-clipboard"></i>
                                <p>Consultation</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="/view/maquette-orthophoniste/gestion-sciences/sciences.php"
                                class="nav-link <?php echo (strpos($current_route, 'sciences') !== false) ? 'active' : ''; ?>">
                                <i class="fa-regular fa-clipboard"></i>
                                <p>Sciences</p>
                            </a>
                        </li>
                    </ul>
                    
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>