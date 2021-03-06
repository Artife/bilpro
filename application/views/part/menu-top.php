<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
    <a class="navbar-brand brand-logo-mini" href="<?= base_url('home'); ?>"><img src="<?= base_url(); ?>theme/assets/images/logo-bilpro.svg" alt="logo Bilpro" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
            <input type="text" class="form-control" placeholder="Buscar proyecto">
        </form>
        </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-lg-block">
        <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Crear nuevo proyecto</a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            <h6 class="p-3 mb-0">Tipo de proyecto</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="<?= base_url(); ?>nuevo-proyecto">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-file-outline text-primary"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Crear nuevo proyecto</p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-web text-info"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Proyecto personalizado</p>
            </div>
            </a> 
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">Ver todos los proyectos</p>
        </div>
        </li>  
        <li class="nav-item dropdown">
        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
            <div class="navbar-profile">
            <img class="img-xs rounded-circle" src="<?= base_url(); ?>theme/assets/images/avatar-<?= $this->session->auth_user['foto']; ?>.png" alt="">
            <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $this->session->auth_user['nombre']; ?> <?= $this->session->auth_user['apellido']; ?></p>
            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <h6 class="p-3 mb-0">Profile</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-success"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject mb-1">Settings</p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="<?= base_url("salir"); ?>">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-logout text-danger"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject mb-1">Salir</p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">Advanced settings</p>
        </div>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
    </button>
    </div>
</nav>