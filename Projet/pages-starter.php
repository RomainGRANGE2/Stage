<?php
    require_once 'persistance/dialogueBD.php';
    try {
        $undlg = new DialogueBD();
        $tabEnreg = $undlg->getTableauEnregistrement();
        $nbEnregTotal = $undlg->getNbTotalEnreg();
        $nbNouveau = $undlg->getNbNouveau();
        $nbVu = $undlg->getNbVu();
        $nbOk = $undlg->getNbOk();
        $nbKo = $undlg->getNbKo();
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
        <link href="assets/css/main.css" id="app-style" rel="stylesheet" type="text/css" />


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
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="#" class="logo logo-light">
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
                                <a class="dropdown-item text-danger" href="auth-login-2.html"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
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
                                <a href="#" class="waves-effect">
                                    <i class="bx bx-line-chart"></i>
                                    <span key="t-dashboards principal" style="font-weight: bold;">Enregistrements</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect has-arrow">
                                    <i class="bx bx-cog"></i>
                                    <span key="t-layouts">Admin</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="enregistreurs.php">Enregistreurs</a></li>
                                    <li><a href="utilisateurs.html">Utilisateurs</a></li>
                                    <li><a href="organisations.html">Organisations</a></li>
                                    <li><a href="auditTrail.html">Audit Trail</a></li>
                                    <li><a href="formats.html">Formats</a></li>
                                    <li><a href="deposants.html">D??posants</a></li>
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
                        <h1>Enregistrements</h1>
                        <div class="frio">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Total</p>
                                                    <h4 class="mb-0"><?php echo $nbEnregTotal?></h4>
                                                </div>
    
                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Nouveau</p>
                                                    <h4 class="mb-0"><?php echo $nbNouveau?></h4>
                                                </div>
    
                                                <div class="flex-shrink-0 align-self-center ">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-user-plus font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Vu</p>
                                                    <h4 class="mb-0"><?php echo $nbVu?></h4>
                                                </div>
    
                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-user-check font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">OK</p>
                                                    <h4 class="mb-0"><?php echo $nbOk?></h4>
                                                </div>
    
                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-like font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Ko</p>
                                                    <h4 class="mb-0"><?php echo $nbKo?></h4>
                                                </div>
    
                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-dislike font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <div class="row">
                                        <div class="mb-3 col-md-3">
                                            <div class="card">
                                                <label for="Recherche" class="form-label">Rechercher</label>
                                                <input type="text" placeholder="Votre recherche" class="form-control">
                                            </div>
                                        </div>  
                                        <div class="mb-3 col-md-3">
                                            <div class="card">
                                                <label for="Statut" class="form-label">Statut</label>
                                                <select class="form-select" name="status">
                                                    <option selected="">Tous</option>
                                                    <option>Nouveau</option>
                                                    <option>Vu</option>
                                                    <option>Ok</option>
                                                    <option>Ko</option>
                                                 </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <label class="form-label">S??l??ction dates</label>
                                    <div class="input-daterange input-group mb-3" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                        <input type="date" class="form-control text-center" name="start" placeholder="Start Date" />
                                        <input type="date" class="form-control text-center" name="end" placeholder="End Date" />
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 checkbox__filtre card mb-3">
                                <div class="checkbox__filtre__solo checkbox__filtre__solo form-check form-checkbox-outline form-check-primary">
                                    <input type="checkbox" class="form-check-input" name="Date-fin">
                                    <label class="form-label">Date de fin</label>
                                </div>
                                <div class="checkbox__filtre__solo checkbox__filtre__solo form-check form-checkbox-outline form-check-primary">
                                    <input type="checkbox" class="form-check-input" name="Date-debut">
                                    <label class="form-label">Date de d??but</label>
                                </div>
                                <div class="checkbox__filtre__solo checkbox__filtre__solo form-check form-checkbox-outline form-check-primary">
                                    <input type="checkbox" class="form-check-input" name="Date-depot">
                                <label class="form-label">Date de d??p??t</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="bouttons-app-rei mb-3">
                                        <button type="submit" class="btn btn-outline-success waves-effect waves-light">APPLIQUER</button>
                                        <button type="submit" class="btn btn-outline-danger waves-effect waves-light">R??INITIALISER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Liste des enregistrements</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between table-responsive">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Num??ro de S??rie</th>
                                                <th>Statut</th>
                                                <th>D??p??t des Donn??es</th>
                                                <th>D??but de l???Enregistrement</th>
                                                <th>Fin de l???Enregistrement</th>
                                                <th>R??f??rence Produit</th>
                                                <th>R??f??rence Transport</th>
                                                <th>Organisation</th>
                                                <th>Fichier</th>       
                                                <th>D??tails</th>     
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr href="#" class="ligne-tab-ok">
                                                <td class="num-serie" scope="row">01</td>
                                                <td><span class="badge rounded-pill bg-success">OK</span></td>
                                                <td>05/02/20</td>
                                                <td>06/02/20</td>
                                                <td>07/02/20</td>
                                                <td>Oui</td>
                                                <td>Oui</td>
                                                <td>Oui</td>
                                                <td>Oui.pdf</td>
                                                <td><button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                    D??tails
                                                </button</td>
                                            </tr>
                                            <tr href="#" class="ligne-tab-new">
                                                <td class="num-serie" scope="row">02</td>
                                                <td><span class="badge rounded-pill bg-info">Nouveau</span></td>
                                                <td>05/02/20</td>
                                                <td>06/02/20</td>
                                                <td>07/02/20</td>
                                                <td>Oui</td>
                                                <td>Oui</td>
                                                <td>Oui</td>
                                                <td>Oui.pdf</td>
                                                <td><button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                    D??tails
                                                </button></td>
                                            </tr>
                                            <tr href="#" class="ligne-tab-vu">
                                                <td class="num-serie" scope="row">03</td>
                                                <td><span class="badge rounded-pill bg-primary">Vu</span></td>
                                                <td>05/02/20</td>
                                                <td>06/02/20</td>
                                                <td>07/02/20</td>
                                                <td>Oui</td>
                                                <td>Oui</td>
                                                <td>Oui</td>
                                                <td>Oui.pdf</td>
                                                <td><button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                    D??tails
                                                </button></td>
                                            </tr>
                                            <tr href="#" class="ligne-tab-ko">
                                                <td class="num-serie" scope="row">04</td>
                                                <td><span class="badge rounded-pill bg-danger">Ko</span></td>
                                                <td>05/02/20</td>
                                                <td>06/02/20</td>
                                                <td>07/02/20</td>
                                                <td>Oui</td>
                                                <td>Oui</td>
                                                <td>Oui</td>
                                                <td>Oui.pdf</td>
                                                <td><button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                    D??tails
                                                </button></td>          
                                            </tr> -->
                                            <?php
                                                foreach($tabEnreg as $ligne){
                                            ?>
                                                <tr>
                                                    <td class="num-serie" scope="row"><?php echo $ligne['num??roDeS??rie']?></td>
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
                                                    <td><?php echo $ligne['dateD??potDonn??es']?></td>
                                                    <td><?php echo $ligne['dateD??butEnregistrement']?></td>
                                                    <td><?php echo $ligne['dateFinEnregistrement']?></td>
                                                    <td><?php echo $ligne['r??f??renceProduit']?></td>
                                                    <td><?php echo $ligne['r??f??renceTransport']?></td>
                                                    <td><?php echo $ligne['Organisation']?></td>
                                                    <td><?php echo $ligne['Fichier']?></td>
                                                    <td><button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        D??tails
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
