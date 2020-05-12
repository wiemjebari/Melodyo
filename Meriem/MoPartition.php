<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Melodyo Admin Space</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/custom_styles.css">
  <script src="js/formvalidators/valider.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
    
        </div>
        <div class="sidebar-brand-text mx-3">Melodyo AdminSpace</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider  mb-0 mt-2">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Statistiques</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        CRUD
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Ajout</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu des ajouts:</h6>
            <a class="collapse-item" href="../../Backend/Meriem/AjoutPartition1.html">Ajouter une Partition</a>
            <a class="collapse-item" href="../../Backend/Meriem/AjouterComp1.html">Ajouter un Compositeur</a>
            <a class="collapse-item" href="../../Backend/Eya/AjouterFacture1.html">Ajouter une Facture</a>
            <a class="collapse-item" href="../../Backend/Eya/AjouterFournisseur1.html">Ajouter un fournisseur</a>
            <a class="collapse-item" href="../../Backend/Eya/AjouterCategorie1.html">Ajouter une Categorie</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-table"></i>
          <span>Listes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Les differents elements:</h6>
            <a class="collapse-item" href="../../Backend/Meriem/AfficherPartition.php">Liste Des Partitions</a>
            <a class="collapse-item" href="../../Backend/Meriem/AfficherComp.php">Liste Des Compositeurs</a>
            <a class="collapse-item" href="../../Backend/Eya/AfficherFacture.php">Lister les Factures</a>
            <a class="collapse-item" href="../../Backend/Eya/AfficherFournisseur.php">Lister les Fournisseurs</a>
            <a class="collapse-item" href="../../Backend/Eya/AfficherCategorie.php">Lister les Categories</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider mb-0 mt-2">

      <!-- Nav Item - Charts -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">

        <div class="card shadow-lg m-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Modification d'une Partition</h6>
          </div>
          <div class="card-body">
            
            <form action="ModifPartition.php" method="POST" onsubmit="return validate_formcat()">
                <div class="form-inline">
                <div class="form-group col-md-6">
                    <input type="number" class="form-control w-100 mt-2 mb-2" name="RefPart" id="RefPart" placeholder="Référence de la partition">
                  </div>

                  <div class="form-group col-md-6">
                    <input type="text" class="form-control w-100 mt-2 mb-2" name="NomPart" id="NomPart" placeholder="Nom de la partition">
                  </div>

                  <div class="form-group col-md-6">
                    <input type="number" class="form-control w-100 mt-2 mb-2" name="Niveau" id="Niveau" placeholder="Niveau">
                  </div>

                  <div class="form-group col-md-6">
                    <input type="text" class="form-control w-100 mt-2 mb-2" name="DispoPart" id="DispoPart" placeholder="DispoPart">
                  </div>

                  <div class="form-group col-md-6">
                    <input type="number" class="form-control w-100 mt-2 mb-2" name="Prix" id="Prix" placeholder="Prix">
                  </div>

                  <div class="form-group col-md-6">
                    <input type="number" class="form-control w-100 mt-2 mb-2" name="IdCom" id="IdCom" placeholder="ID du compositeur">
                  </div>
                
                <button type="submit" class="btn btn-success mt-2 mb-2">Modifier dans la base de données</button>
            </form>

          </div>
        </div>

        <!-- Topbar -->
        <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        <!-- Begin Page Content -->
        <div class="container-fluid">

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Melodyo 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
