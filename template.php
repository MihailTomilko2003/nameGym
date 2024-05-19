<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Сайт для тренажерного зала." />
    <meta name="author" content="Томилко Михаил." />

    <title><?= $title ?></title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <script defer src="js/bootstrap.bundle.min.js"></script>
    <!--
    <link href="DataTables/datatables.min.css" rel="stylesheet"> 
 
    <script src="DataTables/datatables.min.js"></script>  

    <link rel="stylesheet" href="DataTables/datatables.css" />
 
    <script src="DataTables/datatables.js"></script>
-->
    <!-- Custom styles for this template -->
    <link href="sb-admin-2.min.css" rel="stylesheet" />

</head>

<body id="page-top" style="font-size: 10pt; background-color: #fcf7f5;">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion"
            style="width: 10rem!important; background-color: white; border-right: 1px solid #F7F4F2; position: fixed; z-index: 1;"
            id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3" style="color: #6D4133">NameGym</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="border-color:#F7F4F2">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item pos-left--5px row <?= $clientact ?>">
                <div class="col-2" style="background-color: #FF7C50; border-radius: 0 5px 5px 0"></div>
                <a class="nav-link col-17" href="/clients">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Клиенты</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item pos-left--5px row <?= $addact ?>">
                <div class="col-2" style="background-color: #FF7C50; border-radius: 0 5px 5px 0"></div>
                <a class="nav-link col-17" href="/addClient">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <span>Добавить</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a style="width: 10rem;" class="nav-link" href="/lock">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <span>Заблокировать</span></a>
            </li>

            <!-- Divider -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="padding-left: 10rem!important">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top"
                    style="border-bottom: 1px solid #F7F4F2; position: fixed;
    z-index: 1;
    width: -webkit-fill-available;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="d-flex align-items-center w-100">
                        <h4 class="mb-0" style="font-family: interRegular; color: #6D4133;">
                            <?= $title ?>
                        </h4>
                        <form onsubmit="return false;"
                            class="d-none d-sm-inline-block form-inline navbar-search mr-0 ml-auto">
                            <div class="input-group <?= $visible ?>">
                                <div class="input-group-append">
                                    <div class="btn"
                                        style="border-radius: 10px 0 0 10px; background-color: #FF9D50; color: #FCF7F5; cursor: default;"
                                        type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </div>
                                </div>
                                <input type="text" oninput="search(this)" class="form-control border-0 small"
                                    style="background-color: #FCF7F5; color: #CD966B;" placeholder="Поиск по ФИО..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                            </div>
                        </form>
                    </div>
                    <!-- Topbar Search -->


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div style="margin-top: 4.375rem;">
                    <?= $content ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
