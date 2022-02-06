<?php
    require_once 'persistance/dialogueBD.php';
    try {
        $undlg = new DialogueBD();
        if (isset($_POST['ajouterEnre'])){
            $numS = $_POST['numeroserie'];
            $depotDonnee = $_POST['depotDonnees'];
            $debutEnregistrement = $_POST['debutEnregistrement'];
            $finEnregistrement = $_POST['finEnregistrement'];
            $referenceProd = $_POST['referenceProd'];
            $referenceTrans = $_POST['referenceTrans'];
            $organisation = $_POST['organisation'];
            $fichier = $_POST['fichier'];
            $statut = "vu";
            $ajoutEnreg = $undlg->AjoutEnregistrement($numS,$statut,$depotDonnee,$debutEnregistrement,$finEnregistrement,$referenceProd,$referenceTrans,$organisation,$fichier);
        }
        $tabEnreg = $undlg->getTableauEnregistrement();
        // $nbHot = $undlg->getNbHotel();
        // $TabHotel = $undlg->getToutesInfosHotel();
    } catch (Exception $e) {
        $erreur = $e->getMessage();
    }
?>


<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Starter Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="pages-starter.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="pages-starter.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logoThermolabo-dark.png" alt="" height="35">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logoThermolabo-dark.png" alt="" height="35">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    

                    
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                    

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <a class="dropdown-item">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">

                            <li>
                                <a href="pages-starter.html" class="waves-effect">
                                    <i class="bx bx-line-chart"></i>
                                    <span key="t-dashboards principal">Enregistrements</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect has-arrow">
                                    <i class="bx bx-cog"></i>
                                    <span key="t-layouts" style="font-weight: bold;">Admin</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="#" style="font-weight: bold;">Enregistreurs</a></li>
                                    <li><a href="utilisateurs.html">Utilisateurs</a></li>
                                    <li><a href="organisations.html">Organisations</a></li>
                                    <li><a href="auditTrail.html">Audit Trail</a></li>
                                    <li><a href="formats.html">Formats</a></li>
                                    <li><a href="deposants.html">Déposants</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <h1 class="mb-3 col-md-11">Liste des enregistreurs</h1>
                            <i class="bx bxs-add-to-queue font-size-24 col-md-1"></i>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between table-responsive">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Numéro de Série</th>
                                                <th>Fichier déposé ?</th>
                                                <th>Organisation</th>
                                                <th>Date d'expiration</th>
                                                <th>Documents</th>
                                                <th>Supprimer</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($tabEnreg as $ligne){
                                            ?>
                                                <tr>
                                                    <td class="num-serie" scope="row"><?php echo $ligne['numéroDeSérie']?></td>
                                                    <td>
                                                        <?php
                                                            if ($ligne['Statut'] == "nouveau"){
                                                                echo "<span class='badge rounded-pill bg-warning'>Nouveau</span>";
                                                            }
                                                            if ($ligne['Statut'] == "vu"){
                                                                echo "<span class='badge rounded-pill bg-primary'>Vu</span>";
                                                            }
                                                            if ($ligne['Statut'] == "ok"){
                                                                echo "<span class='badge rounded-pill bg-success'>OK</span>";
                                                            }
                                                            if ($ligne['Statut'] == "ko"){
                                                                echo "<span class='badge rounded-pill bg-danger'>Ko</span>";
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                    <td><?php echo $ligne['dateDépotDonnées']?></td>
                                                    <td><?php echo $ligne['dateDébutEnregistrement']?></td>
                                                    <td><?php echo $ligne['dateFinEnregistrement']?></td>
                                                    <td><?php echo $ligne['référenceProduit']?></td>
                                                    <td><?php echo $ligne['référenceTransport']?></td>
                                                    <td><?php echo $ligne['Organisation']?></td>
                                                    <td><?php echo $ligne['Fichier']?></td>
                                                    <td><button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        Détails
                                                    </button></td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> Copyright Thermolabo.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
