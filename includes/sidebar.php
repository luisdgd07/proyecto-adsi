<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php session_start();
if (!isset($_SESSION["rol"]) || $_SESSION["rol"] == 0) {
  header("Location: ./index.php");
}
?>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main" style="    z-index: auto;">

  <!-- <center><img src="" id="logo" class="mt-2" height="140" alt=""> </center> -->
  <div class="sidenav-header">

    <a class="navbar-brand text-center mx-0 mb-4 " href="principal.php" style="    font-size: 55px;padding: 1.5rem 1.5rem;    margin-top: -15px;">
      IPASME

    </a>
  </div>
  <div class="collapse navbar-collapse  w-auto mt-4" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="./principal.php">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Pacientes</span>
        </a>
      </li>

    </ul>

  </div>
  <div class="sidenav-footer mx-3 ">
    <a href="./logout.php" class="btn btn-danger btn-sm w-100 mb-3">Salir</a>
  </div>
</aside>