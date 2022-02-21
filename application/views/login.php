<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
          <div class="card-body px-5 py-5">
            <h3 class="card-title text-center mb-3">Bilpro</h3>
            <form action="<?= base_url('login/validar'); ?>" method="post">
              <?php if($this->session->flashdata('status')): ?>
              <div class="alert alert-<?= $this->session->flashdata('statusType') ?>" role="alert">
                 <?= $this->session->flashdata('status') ?>
              </div>
              <?php endif; ?>
              <div class="form-group">
                <label>Correo *</label>
                <input type="email" class="form-control p_input" id="correo" name="correo">
                <span class="error"><?php echo form_error('correo'); ?></span>
              </div>
              <div class="form-group">
                <label>Contraseña *</label>
                <input type="password" class="form-control p_input" id="pass" name="pass">
                <span class="error"><?php echo form_error('pass'); ?></span>
              </div>
              <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Recordar </label>
                </div>
                <a href="#" class="forgot-pass">Recuperar contraseña</a>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Entrar</button>
              </div> 
              <p class="sign-up"><a href="<?= base_url('registro'); ?>">solicitar una cuenta nueva</a></p>
            </form>
          </div>
        </div>
      </div> 
    </div> 
  </div> 
</div> 
    